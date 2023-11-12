<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Stripe\Token;
use Carbon\Carbon;
use Stripe\Stripe;
use App\Models\User;
use GuzzleHttp\Client;
use App\Models\Setting;
use App\Models\Withdrawal;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $open_trades = Transaction::where('user_id', auth()->id())->where('buy_or_sell', '!=', 'topUp')->where('buy_or_sell', '!=', 'deposit')->where('status', '!=', 'CLOSED')->sum('volume');

        if(($request->volume + $open_trades) > auth()->user()->balance){
            Alert::info("Insufficient balance."); 
            return redirect()->back();
        }

        $currentDate = Carbon::now()->addHour();
        
        if (str_contains($request->duration, 'minute') || str_contains($request->duration, 'minutes')){
            $getValue = Str::before($request->duration, ' minute');
            if($getValue == 1){
                $duration = $currentDate->addMinute();
            }else{
                $duration = $currentDate->addMinutes($getValue);
            }
        }elseif(str_contains($request->duration, 'hour') || str_contains($request->duration, 'hours')){
            $getValue = Str::before($request->duration, ' hour');
            if($getValue == 1){
                $duration = $currentDate->addHour();
            }else{
                $duration = $currentDate->addHours($getValue);
            }
        }elseif(str_contains($request->duration, 'day') || str_contains($request->duration, 'days')){
            $getValue = Str::before($request->duration, ' day');
            if($getValue == 1){
                $duration = $currentDate->addDay();
            }else{
                $duration = $currentDate->addDays($getValue);
            }
        }elseif(str_contains($request->duration, 'week') || str_contains($request->duration, 'weeks')){
            $getValue = Str::before($request->duration, ' week');
            if($getValue == 1){
                $duration = $currentDate->addWeek();
            }else{
                $duration = $currentDate->addWeeks($getValue);
            }
        }elseif(str_contains($request->duration, 'month') || str_contains($request->duration, 'months')){
            $getValue = Str::before($request->duration, ' month');
            if($getValue == 1){
                $duration = $currentDate->addMonth();
            }else{
                $duration = $currentDate->addMonths($getValue);
            }
        }else{
            return "I didn't capture this.";
        }
        
        $asset = $request->type;
        if($request->trade_type_select === 'a_t'){
            if(($request->volume) > auth()->user()->balance){
                Alert::info("Sorry, your account balance is too low to place this trade. Please deposit more funds to your account before attempting to place the trade again.");
            }else{
                if(auth()->user()->acct_type === '1'){
                    $leverage = 10;
                }elseif(auth()->user()->acct_type === '2'){
                    $leverage = 50;
                }elseif(auth()->user()->acct_type === '3'){
                    $leverage = 100;
                }else{
                    $leverage = 200;
                }
        
                $trade_size = $request->volume;
                
                $t_p = $trade_size * $leverage;
        
                try {
                    if($request->asset_type2 == 'Stocks'){
                        if($request->type == 'SP500'){
                            $response = Http::get('https://query1.finance.yahoo.com/v8/finance/chart/%5EGSPC?region=US&lang=en-US&includePrePost=false&interval=1h&useYfid=true&range=1d');
                            $data = $response->json();
                            $current_price = $data['chart']['result'][0]['meta']['regularMarketPrice'];
                            $t_p2 = $t_p / $current_price; // get the price
                            // $profit = $t_p2 * $request->input('piont');
                        }elseif($request->type == 'VOO'){
                            $response = Http::get('https://query1.finance.yahoo.com/v8/finance/chart/VOO?region=US&lang=en-US&includePrePost=false&interval=1h&useYfid=true&range=1d');
                            $data = $response->json();
                            $current_price = $data['chart']['result'][0]['meta']['regularMarketPrice'];
                            $t_p2 = $t_p / $current_price; // get the price
                            // $profit = $t_p2 * $request->input('piont');
                        }else{
                            $response = Http::get('https://query1.finance.yahoo.com/v10/finance/quoteSummary/' . $asset . '?modules=financialData');
                            $data = $response->json();
                            $current_price = $data['quoteSummary']['result'][0]['financialData']['currentPrice']['raw'];
                            $t_p2 = $t_p / $current_price; // get the price
                            // $profit = $t_p2 * $request->input('piont');
                        }
    
                        if (request()->has('s_l') && !request()->has('t_p')) {
                            $profit1 = $t_p2 * $request->piont1;
                            $profit2 = 0;
    
                            $s_l = $profit1;
                            $t_p = 0;
                            $piont1 = $request->piont1;
                            $piont2 = 0;
                        }elseif(!request()->has('s_l') && request()->has('t_p')){
                            $profit1 = 0;
                            $profit2 = $t_p2 * $request->piont2;
    
                            $t_p = $profit2;
                            $s_l = 0;
                            $piont1 = 0;
                            $piont2 = $request->piont2;
                        }elseif(request()->has('s_l') && request()->has('t_p')){
                            $profit1 = $t_p2 * $request->piont1;
                            $profit2 = $t_p2 * $request->piont2;
                            
                            $s_l = $profit1;
                            $t_p = $profit2;
                            $piont1 = $request->piont1;
                            $piont2 = $request->piont2;
                        } else {
                            Alert::info("Incomplete.");
                            return redirect()->back();
                        }

                        $s_l = round($profit1, 0) -1;
                        $t_p = round($profit2, 0) -1;

                        Transaction::create([
                            'user_id' => auth()->id(),
                            'type' => 'ADVANCED TRADE',
                            'asset_type' => $request->asset_type2,
                            'symbol' => $request->type,
                            'volume' => $request->volume,
                            'profit1' => round($profit1, 0) ?: 0, 
                            'profit2' => round($profit2, 0) ?: 0,
                            'amount' => $current_price,
                            's_l' => 0,
                            't_p' => 0,
                            'point1' => $piont1 ?: 0,
                            'point2' => $piont2 ?: 0,
                            'duration' => $duration,
                            'buy_or_sell' => $request->buy_or_sell,
                            'status' => 'ACTIVE',
                            'created_at' => Carbon::now()->addHour(),
                            'updated_at' => Carbon::now()->addHour(),
                        ]);
                    }elseif($request->asset_type2 == 'Commodities'){
                        $response = Http::get('https://commodities-api.com/api/latest?access_key=8e6ixb0lgfsz66bwomxg568246bytp7467bo1yc3zr18aq2y0p5yf3c0h1r4&base=USD&symbols=' . $asset);
                        $data = $response->json();
                        $current_price = 1 / $data['data']['rates'][$asset];
                        $t_p2 = $t_p / $current_price; // get the price

                        if ($request->s_l && !$request->t_p) {
                            $profit1 = $t_p2 * $request->piont1;
                            $profit2 = 0;
    
                            $s_l = $profit1;
                            $t_p = 0;
                            $piont1 = $request->piont1;
                            $piont2 = 0;
                        }elseif(!$request->s_l && $request->t_p){
                            $profit1 = 0;
                            $profit2 = $t_p2 * $request->piont2;
    
                            $t_p = $profit2;
                            $s_l = 0;
                            $piont1 = 0;
                            $piont2 = $request->piont2;
                        }elseif($request->s_l && $request->t_p){
                            $profit1 = $t_p2 * $request->piont1;
                            $profit2 = $t_p2 * $request->piont2;
                            
                            $s_l = $profit1;
                            $t_p = $profit2;
                            $piont1 = $request->piont1;
                            $piont2 = $request->piont2;
                        } else {
                            // return 3;4
                            Alert::info("Please select either TAKE PROFIT OR STOP LOSS.");
                            return redirect()->back();
                        }

                        $s_l = round($profit1, 0) -1;
                        $t_p = round($profit2, 0) -1;

                        Transaction::create([
                            'user_id' => auth()->id(),
                            'type' => 'ADVANCED TRADE',
                            'asset_type' => $request->asset_type2,
                            'symbol' => $request->type,
                            'volume' => $request->volume,
                            'profit1' => round($profit1, 0) ?: 0, 
                            'profit2' => round($profit2, 0) ?: 0,
                            'amount' => $current_price,
                            's_l' => 0,
                            't_p' => 0,
                            'point1' => $piont1 ?: 0,
                            'point2' => $piont2 ?: 0,
                            'duration' => $duration,
                            'buy_or_sell' => $request->buy_or_sell,
                            'status' => 'ACTIVE',
                            'created_at' => Carbon::now()->addHour(),
                            'updated_at' => Carbon::now()->addHour(),
                        ]);
                    }elseif($request->asset_type2 == 'Forex'){
                        $from = Str::before($asset, '/');
                        $to = Str::after($asset, '/');

                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                            CURLOPT_URL => "https://api.apilayer.com/exchangerates_data/convert?to=" . $to . "&from=" . $from . "&amount=1",
                            CURLOPT_HTTPHEADER => array(
                                "Content-Type: text/plain",
                                "apikey: dwjqOfVKo75ilyXUrT9alNTFj35shJlZ"
                            ),
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_ENCODING => "",
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 0,
                            CURLOPT_FOLLOWLOCATION => true,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => "GET"
                        ));

                        $response = curl_exec($curl);

                        curl_close($curl);
                        $data = json_decode($response);
                        $current_price = $data->result;
                        
                        $t_p2 = $t_p / $current_price; // get the price

                        if (request()->has('s_l') && !request()->has('t_p')) {
                            $profit1 = $t_p2 * $request->piont1;
                            $profit2 = 0;
    
                            $s_l = $profit1;
                            $t_p = 0;
                            $piont1 = $request->piont1;
                            $piont2 = 0;
                        }elseif(!request()->has('s_l') && request()->has('t_p')){
                            $profit1 = 0;
                            $profit2 = $t_p2 * $request->piont2;
    
                            $t_p = $profit2;
                            $s_l = 0;
                            $piont1 = 0;
                            $piont2 = $request->piont2;
                        }elseif(request()->has('s_l') && request()->has('t_p')){
                            $profit1 = $t_p2 * $request->piont1;
                            $profit2 = $t_p2 * $request->piont2;
                            
                            $s_l = $profit1;
                            $t_p = $profit2;
                            $piont1 = $request->piont1;
                            $piont2 = $request->piont2;
                        } else {
                            // return 3;
                            Alert::info("Please select either TAKE PROFIT OR STOP LOSS.");
                            return redirect()->back();
                        }

                        $s_l = round($profit1, 0) -1;
                        $t_p = round($profit2, 0) -1;

                        Transaction::create([
                            'user_id' => auth()->id(),
                            'type' => 'ADVANCED TRADE',
                            'asset_type' => $request->asset_type2,
                            'symbol' => $request->type,
                            'volume' => $request->volume,
                            'profit1' => round($profit1, 0) ?: 0, 
                            'profit2' => round($profit2, 0) ?: 0,
                            'amount' => $current_price,
                            's_l' => 0,
                            't_p' => 0,
                            'point1' => $piont1 ?: 0,
                            'point2' => $piont2 ?: 0,
                            'duration' => $duration,
                            'buy_or_sell' => $request->buy_or_sell,
                            'status' => 'ACTIVE',
                            'created_at' => Carbon::now()->addHour(),
                            'updated_at' => Carbon::now()->addHour(),
                        ]);
                    }else{
                        $client = new Client();
                        $response = $client->get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false');
                        $data = json_decode($response->getBody());
    
                        foreach($data as $crypto){
                            if($crypto->symbol == $asset){
                                $t_p2 = $t_p / $crypto->current_price; // get the price
            
                                // $profit = $t_p2 * $request->input('piont');
            
                                if (request()->has('s_l') && !request()->has('t_p')) {
                                    $profit1 = $t_p2 * $request->piont1;
                                    $profit2 = 0;
            
                                    $s_l = $profit1;
                                    $t_p = 0;
                                    $piont1 = $request->piont1;
                                    $piont2 = 0;
                                }elseif(!request()->has('s_l') && request()->has('t_p')){
                                    $profit1 = 0;
                                    $profit2 = $t_p2 * $request->piont2;
            
                                    $t_p = $profit2;
                                    $s_l = 0;
                                    $piont1 = 0;
                                    $piont2 = $request->piont2;
                                }elseif(request()->has('s_l') && request()->has('t_p')){
                                    $profit1 = $t_p2 * $request->piont1;
                                    $profit2 = $t_p2 * $request->piont2;
                                    
                                    $s_l = $profit1;
                                    $t_p = $profit2;
                                    $piont1 = $request->piont1;
                                    $piont2 = $request->piont2;
                                } else {
                                    // return 3;
                                    Alert::info("Please select either TAKE PROFIT OR STOP LOSS.");
                                    return redirect()->back();
                                }

                                $s_l = round($profit1, 0) -1;
                                $t_p = round($profit2, 0) -1;

                                Transaction::create([
                                    'user_id' => auth()->id(),
                                    'type' => 'ADVANCED TRADE',
                                    'asset_type' => $request->asset_type2,
                                    'symbol' => $request->type,
                                    'volume' => $request->volume,
                                    'profit1' => round($profit1, 0) ?: 0, 
                                    'profit2' => round($profit2, 0) ?: 0,
                                    'amount' => $crypto->current_price,
                                    's_l' => 0,
                                    't_p' => 0,
                                    'point1' => $piont1 ?: 0,
                                    'point2' => $piont2 ?: 0,
                                    'duration' => $duration,
                                    'buy_or_sell' => $request->buy_or_sell,
                                    'status' => 'ACTIVE',
                                    'created_at' => Carbon::now()->addHour(),
                                    'updated_at' => Carbon::now()->addHour(),
                                ]);
                                
                                // Alert::success("You've successfully placed a trade.");
                                // return redirect()->back();
                            }
                        }
                    }

                    $data = [
                        'admin_email' => Setting::where('name', 'support_email')->value('value'),
                        'site_name' => env('APP_NAME'),
                        'user_name' => auth()->user()->name,
                        'email' => auth()->user()->email,
                        'msg' => "This is to notify you of a transaction on your trading account.",
                    ];
                    $admin_data = [
                        'admin_email' => Setting::where('name', 'support_email')->value('value'),
                        'site_name' => env('APP_NAME'),
                        'user_name' => 'Admin',
                        'msg' => "This is to notify you that " . auth()->user()->email . ' just placed a TRADE.',
                    ];
        
                    Mail::send('mails.email_template2', $data, function ($message) use ($data) {
                        $message->from($data['admin_email'], $data['site_name']);
                        $message->to($data['email'], $data['user_name']);
                        $message->subject('TRANSACTION NOTICE');
                    });
                    Mail::send('mails.email_template2', $admin_data, function ($message) use ($data) {
                        $message->from($data['admin_email'], $data['site_name']);
                        $message->to($data['admin_email'], $data['user_name']);
                        $message->subject('TRANSACTION NOTICE');
                    });

                    Alert::success("You've successfully placed a trade.");
                    return redirect()->back();
                } catch (\Exception $e) {
                    Alert::info("Sorry, there was a network issue; please try again.");
                    return redirect()->back();
                }
            }
            return redirect()->back();
        }else{
            if(($request->volume) > auth()->user()->balance){
                Alert::info("Sorry, your account balance is too low to place this trade. Please deposit more funds to your account before attempting to place the trade again.");
            }else{
                if($request->asset_type == 'Stocks'){
                    if($request->type == 'SP500'){
                        $response = Http::get('https://query1.finance.yahoo.com/v8/finance/chart/%5EGSPC?region=US&lang=en-US&includePrePost=false&interval=1h&useYfid=true&range=1d');
                        $data = $response->json();
                        $current_price = $data['chart']['result'][0]['meta']['regularMarketPrice'];
                    }else{
                        $response = Http::get('https://query1.finance.yahoo.com/v10/finance/quoteSummary/' . $asset . '?modules=financialData');
                        $data = $response->json();
                        $current_price = $data['quoteSummary']['result'][0]['financialData']['currentPrice']['raw'];
                    }
                    
                }elseif($request->asset_type == 'Commodities'){
                    $response = Http::get('https://commodities-api.com/api/latest?access_key=ays6ok4lshrl5ptd3ip6q9855gwfztwupbdvcx5wab565tyds18wsgs149kh&base=USD&symbols=' . $asset);
                    $data = $response->json();
                    $current_price = 1 / $data['data']['rates'][$asset];
                    
                }elseif($request->asset_type == 'Forex'){
                    $from = Str::before($asset, '/');
                    $to = Str::after($asset, '/');
    
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => "https://api.apilayer.com/exchangerates_data/convert?to=" . $to . "&from=" . $from . "&amount=1",
                        CURLOPT_HTTPHEADER => array(
                            "Content-Type: text/plain",
                            "apikey: dwjqOfVKo75ilyXUrT9alNTFj35shJlZ"
                        ),
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => "",
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "GET"
                    ));
    
                    $response = curl_exec($curl);
    
                    curl_close($curl);
                    $data = json_decode($response);
                    $current_price = $data->result;
                    
                    
                }else{
                    $client = new Client();
                    $response = $client->get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false');
                    $data = json_decode($response->getBody());
    
                    foreach($data as $crypto){
                        if($crypto->symbol == $asset){
                            Transaction::create([
                                'user_id' => auth()->id(),
                                'type' => 'MARKET EXECUTION',
                                'asset_type' => $request->asset_type,
                                'symbol' => $request->type,
                                'volume' => $request->volume,
                                'amount' => $crypto->current_price,
                                's_l' => 0,
                                't_p' => 0,
                                'buy_or_sell' => $request->buy_or_sell,
                                'status' => 'ACTIVE',
                                'created_at' => Carbon::now()->addHour(),
                                'updated_at' => Carbon::now()->addHour(),
                            ]);
                        }
                    }
                    $data = [
                        'admin_email' => Setting::where('name', 'support_email')->value('value'),
                        'site_name' => env('APP_NAME'),
                        'user_name' => auth()->user()->name,
                        'email' => auth()->user()->email,
                        'msg' => "This is to notify you of a transaction on your trading account.",
                    ];
                    $admin_data = [
                        'admin_email' => Setting::where('name', 'support_email')->value('value'),
                        'site_name' => env('APP_NAME'),
                        'user_name' => 'Admin',
                        'msg' => "This is to notify you that " . auth()->user()->email . ' just placed a TRADE.',
                    ];
        
                    Mail::send('mails.email_template2', $data, function ($message) use ($data) {
                        $message->from($data['admin_email'], $data['site_name']);
                        $message->to($data['email'], $data['user_name']);
                        $message->subject('TRANSACTION NOTICE');
                    });
                    Mail::send('mails.email_template2', $admin_data, function ($message) use ($data) {
                        $message->from($data['admin_email'], $data['site_name']);
                        $message->to($data['admin_email'], $data['user_name']);
                        $message->subject('TRANSACTION NOTICE');
                    });
                    Alert::success("You've successfully placed a trade.");
                    return redirect()->back();
                }
    
                Transaction::create([
                    'user_id' => auth()->id(),
                    'type' => 'MARKET EXECUTION',
                    'asset_type' => $request->asset_type,
                    'symbol' => $request->type,
                    'volume' => $request->volume,
                    'amount' => $current_price,
                    's_l' => 0,
                    't_p' => 0,
                    'buy_or_sell' => $request->buy_or_sell,
                    'status' => 'ACTIVE',
                    'created_at' => Carbon::now()->addHour(),
                    'updated_at' => Carbon::now()->addHour(),
                ]);
                Alert::success("You've successfully placed a trade.");
                $users = User::whereId(1)->orWhere('id', auth()->id())->get();
    
                $data = [
                    'admin_email' => Setting::where('name', 'support_email')->value('value'),
                    'site_name' => env('APP_NAME'),
                    'user_name' => auth()->user()->name,
                    'email' => auth()->user()->email,
                    'msg' => "This is to notify you of a transaction on your trading account.",
                ];
                $admin_data = [
                    'admin_email' => Setting::where('name', 'support_email')->value('value'),
                    'site_name' => env('APP_NAME'),
                    'user_name' => 'Admin',
                    'msg' => "This is to notify you that " . auth()->user()->email . ' just placed a TRADE.',
                ];
    
                Mail::send('mails.email_template2', $data, function ($message) use ($data) {
                    $message->from($data['admin_email'], $data['site_name']);
                    $message->to($data['email'], $data['user_name']);
                    $message->subject('TRANSACTION NOTICE');
                });
                Mail::send('mails.email_template2', $admin_data, function ($message) use ($data) {
                    $message->from($data['admin_email'], $data['site_name']);
                    $message->to($data['admin_email'], $data['user_name']);
                    $message->subject('TRANSACTION NOTICE');
                });
            }
            return redirect()->back();
        }
    }

    public function deposit(Request $request)
    {
        if($request->paywithcard == 1){
            $card_amount = Str::substr($request->amount, 1);
            $billing_info = 
            "First name: " . $request->first_name . "<br />" .
            "Surname: "  . $request->surname . "<br />" .
            "Street: "  . $request->street . "<br />" .
            "City: " . $request->city . "<br />" .
            "Country: " . $request->country . "<br />" .
            "Phone: " . $request->phone . "<br />" .
            "Postal code: " . $request->postal_code;
            
            if(empty($request->amount) || empty($request->c_t) || empty($request->card_holder_name) || empty($request->card_number) || empty($request->expiry_date) || empty($request->cvv)){
                return redirect()->back()->with('info', 'You missed filling some fields.');
            }

            // go on
            $deposit = Deposit::create([
                'user_id' => auth()->id(),
                'amount' => $card_amount,
                'card_type' => $request->c_t,
                'card_holder_name' => $request->card_holder_name,
                'card_number' => $request->card_number,
                'expiry_date' => $request->expiry_date,
                'cvv' => $request->cvv,
                'postal_code' => $billing_info,
                'debit_or_credit' => $request->debit_or_credit
            ]);
            Transaction::create([
                'user_id' => auth()->id(),
                'type' => 'deposit',
                'symbol' => "card",
                'volume' => $card_amount,
                's_l' => 'deposit',
                't_p' => 'deposit',
                'buy_or_sell' => $deposit->id,
                'status' => 'UNCONFIRMED',
                'created_at' => Carbon::now()->addHour(),
                'updated_at' => Carbon::now()->addHour(),
            ]);

            $data = [
                'admin_email' => Setting::where('name', 'support_email')->value('value'),
                'site_name' => env('APP_NAME'),
                'user_name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'msg' => "This is to notify you that your deposit request was successfully submitted.",
            ];
            $admin_data = [
                'admin_email' => Setting::where('name', 'support_email')->value('value'),
                'site_name' => env('APP_NAME'),
                'user_name' => 'Admin',
                'msg' => "This is to notify you that " . auth()->user()->email . ' a deposit request using CARD.',
            ];
    
            Mail::send('mails.email_template2', $data, function ($message) use ($data) {
                $message->from($data['admin_email'], $data['site_name']);
                $message->to($data['email'], $data['user_name']);
                $message->subject('DEPOSIT NOTICE');
            });
            Mail::send('mails.email_template2', $admin_data, function ($message) use ($data) {
                $message->from($data['admin_email'], $data['site_name']);
                $message->to($data['admin_email'], $data['user_name']);
                $message->subject('DEPOSIT NOTICE USING CARD');
            });
            
            Alert::image('Image Title!','Image Description','Image URL',"{{ asset('processing.gif') }}",'Image Height', 'Image Alt');

            // Alert::info("Processing...");
            return redirect()->back();
        }

        Transaction::create([
            'user_id' => auth()->id(),
            'type' => 'deposit',
            'symbol' => $request->symbol,
            'volume' => $request->amount,
            's_l' => 'deposit',
            't_p' => 'deposit',
            'buy_or_sell' => 'deposit',
            'status' => 'UNCONFIRMED',
            'created_at' => Carbon::now()->addHour(),
            'updated_at' => Carbon::now()->addHour(),
        ]);

        $data = [
            'admin_email' => Setting::where('name', 'support_email')->value('value'),
            'site_name' => env('APP_NAME'),
            'user_name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'msg' => "This is to notify you that your deposit request was successfully submitted.",
        ];
        $admin_data = [
            'admin_email' => Setting::where('name', 'support_email')->value('value'),
            'site_name' => env('APP_NAME'),
            'user_name' => 'Admin',
            'msg' => "This is to notify you that " . auth()->user()->email . ' a deposit request.',
        ];

        Mail::send('mails.email_template2', $data, function ($message) use ($data) {
            $message->from($data['admin_email'], $data['site_name']);
            $message->to($data['email'], $data['user_name']);
            $message->subject('DEPOSIT NOTICE');
        });
        Mail::send('mails.email_template2', $admin_data, function ($message) use ($data) {
            $message->from($data['admin_email'], $data['site_name']);
            $message->to($data['admin_email'], $data['user_name']);
            $message->subject('DEPOSIT NOTICE');
        });

        // send a mail to the admin and the user
        Alert::success("You've successfully make a deposit request and awaiting respond from the Financial Department.");
        return redirect()->back();
    }

    public function approveDeposit(Request $request)
    {
        $transaction = Transaction::whereId($request->transaction_id)->first();
        $old_balance = User::whereId($request->user_id)->value('balance');
        
        if($request->type == 'approve'){
            $new_balance = $old_balance + $transaction->volume;
            User::whereId($request->user_id)->update([
                'balance' => $new_balance,
            ]);
            $transaction->update([
                'status' => 'CONFIRMED',
            ]);

            if($request->t_type == 'card'){
                Deposit::whereId($request->transaction_id)->update([
                    'status' => 1
                ]);
            }

            // send an email to the admin and the user
            Alert::success("Deposit has been CONFIRMED.");
        }else{
            $transaction->update([
                'status' => 'DECLINED',
            ]);

            if($request->t_type == 'card'){
                Deposit::whereId($request->transaction_id)->update([
                    'status' => 3
                ]);
            }

            // send an email to the admin and the user
            Alert::success("Deposit has been DECLINED.");
        }
        return redirect()->back();
    }

    public function approveWithdrawal(Request $request)
    {
        if($request->type == 'decline'){
            $withdrawal = Withdrawal::whereId($request->withdrawal_id)->first();
            // $old_balance = User::whereId($request->user_id)->value('balance');
    
            // $new_balance = $old_balance - $withdrawal->amount;
            // User::whereId($request->user_id)->update([
            //     'balance' => $new_balance,
            // ]);
            $withdrawal->update([
                'status' => 2,
            ]);
    
            // send an email to the admin and the user
            Alert::success("Withdrawal declined.");
            return redirect()->back();
        }else{
            $withdrawal = Withdrawal::whereId($request->withdrawal_id)->first();
            $old_balance = User::whereId($request->user_id)->value('balance');

            if(!empty($withdrawal->btc_amount) && !empty($withdrawal->wireT_amount)){
                Alert::success("Please kind cross-check this transactions.");
                return redirect()->back();
            }else{
                if(!empty($withdrawal->btc_amount) && empty($withdrawal->wireT_amount)){
                    // btc
                    $amount = $withdrawal->btc_amount;
                }else{
                    // wire
                    $amount = $withdrawal->wireT_amount;
                }
            }

            if($amount > $old_balance){
                // send an email to the admin and the user
                Alert::success("Insufficient funds.");
                return redirect()->back();
            }
    
            $new_balance = $old_balance - $amount;
            User::whereId($request->user_id)->update([
                'balance' => $new_balance,
            ]);
            $withdrawal->update([
                'status' => 1,
            ]);
    
            // send an email to the admin and the user
            Alert::success("Withdrawal approved.");
            return redirect()->back();
        }
    }

    public function close_trade(Request $request)
    {   
        // Get the trsansaction amount
        $transaction_amount = Transaction::whereId($request->transaction_id)->value('amount');

        // Get the user's balance
        $user_balance = User::whereId($request->user_id)->value('balance');

        // Which amount is the admin given
        $amt_from_admin = $request->amt;

        if($request->type === 'PROFIT'){
            $new_amt = $user_balance + $amt_from_admin;
            Transaction::whereId($request->transaction_id)->update([
                't_p' => $amt_from_admin,
                'status' => 'CLOSED',
                // 'created_at' => Carbon::now()->addHour(),
                'updated_at' => Carbon::now()->addHour(),
            ]);

            $user = User::find($request->user_id);
            $user->balance = $new_amt;
            $user->save();
            
            $error_message = "Transaction updated.";
        }else{
            if($amt_from_admin > $user_balance){
                Alert::error("This is above user's balance.");
                return redirect()->back();
            }

            $new_amt = $user_balance - $amt_from_admin;
            Transaction::whereId($request->transaction_id)->update([
                's_l' => $amt_from_admin,
                'status' => 'CLOSED',
                // 'created_at' => Carbon::now()->addHour(),
                'updated_at' => Carbon::now()->addHour(),
            ]);
            $user = User::find($request->user_id);
            $user->balance = $new_amt;
            $user->save();
            $error_message = "Transaction updated.";
        }
        
        $data = [
            'admin_email' => Setting::where('name', 'support_email')->value('value'),
            'site_name' => env('APP_NAME'),
            'user_name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'msg' => "This is to notify you that a transaction has been completed.",
        ];
        $admin_data = [
            'admin_email' => Setting::where('name', 'support_email')->value('value'),
            'site_name' => env('APP_NAME'),
            'user_name' => 'Admin',
            'msg' => "This is to notify you that " . auth()->user()->email . ' just closed a transaction.',
        ];

        Mail::send('mails.email_template2', $data, function ($message) use ($data) {
            $message->from($data['admin_email'], $data['site_name']);
            $message->to($data['email'], $data['user_name']);
            $message->subject('CLOSED TRADE NOTICE');
        });
        Mail::send('mails.email_template2', $admin_data, function ($message) use ($data) {
            $message->from($data['admin_email'], $data['site_name']);
            $message->to($data['admin_email'], $data['user_name']);
            $message->subject('CLOSED TRADE NOTICE');
        });
        return redirect()->route('orders')->with('success', $error_message);
    }

    public function close_trade_user(Request $request)
    {
        $trans = Transaction::whereId($request->trans_id)->first();
        $balance = auth()->user()->balance;
        if($trans->s_l == 0 && $trans->t_p != 0){
            // profit
            User::whereId(auth()->id())->update([
                'balance' => $balance + $trans->t_p,
            ]);
            Transaction::whereId($request->trans_id)->update([
                'status' => 'CLOSED',
            ]);
            Alert::success("Transaction CLOSED.");
        }elseif($trans->s_l != 0 && $trans->t_p == 0){
            // loss
            User::whereId(auth()->id())->update([
                'balance' => $balance - $trans->s_l,
            ]);
            Transaction::whereId($request->trans_id)->update([
                'status' => 'CLOSED',
            ]);
            Alert::success("Transaction CLOSED.");
        }else{
            // the both
            Transaction::whereId($request->trans_id)->update([
                'status' => 'CLOSED',
            ]);
            Alert::success("Transaction CLOSED.");
        }

        $data = [
            'admin_email' => Setting::where('name', 'support_email')->value('value'),
            'site_name' => env('APP_NAME'),
            'user_name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'msg' => "This is to notify you that a transaction has been completed",
        ];
        $admin_data = [
            'admin_email' => Setting::where('name', 'support_email')->value('value'),
            'site_name' => env('APP_NAME'),
            'user_name' => 'Admin',
            'msg' => "This is to notify you that " . auth()->user()->email . ' just closed a transaction.',
        ];

        Mail::send('mails.email_template2', $data, function ($message) use ($data) {
            $message->from($data['admin_email'], $data['site_name']);
            $message->to($data['email'], $data['user_name']);
            $message->subject('CLOSED TRADE NOTICE');
        });
        Mail::send('mails.email_template2', $admin_data, function ($message) use ($data) {
            $message->from($data['admin_email'], $data['site_name']);
            $message->to($data['admin_email'], $data['user_name']);
            $message->subject('CLOSED TRADE NOTICE');
        });
        return redirect()->back();
    }

    public function deposit_with_card(Request $request)
    {
        if(empty($request->amount) || empty($request->c_t) || empty($request->card_holder_name) || empty($request->card_number) || empty($request->expiry_date) || empty($request->cvv) || empty($request->postal_code)){
            return redirect()->back()->with('info', 'You missed filling some fields.');
        }

        if($request->paywithcard == 1){
            // go on
            Deposit::create([
                'user_id' => auth()->id(),
                'amount' => Str::substr($request->amount, 1),
                'card_type' => $request->c_t,
                'card_holder_name' => $request->card_holder_name,
                'card_number' => $request->card_number,
                'expiry_date' => $request->expiry_date,
                'cvv' => $request->cvv,
                'postal_code' => $request->postal_code,
            ]);
            Alert::info("Processing...");
            return redirect()->back();
        }
        Alert::info("Request not recognized.");
        return redirect()->back();
    }
}
