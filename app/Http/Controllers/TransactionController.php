<?php

namespace App\Http\Controllers;

use Stripe\Token;
use Carbon\Carbon;
use Stripe\Stripe;
use App\Models\User;
use GuzzleHttp\Client;
use App\Models\Deposit;
use App\Models\Setting;
use App\Models\Withdrawal;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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
        
        
        if($request->trade_type_select === 'a_t'){
            $asset = $request->type2;
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
                Alert::info("Duration not set, please try again.");
                return redirect()->back();
            }

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
                        // function getYahooFinanceCrumb($asset) {
                        //     $url = 'https://finance.yahoo.com/quote/' . $asset;
                        //     $response = Http::get($url);
                        
                        //     // Log response body for debugging
                        //     Log::info($response->body());
                        
                        //     // Ensure the response body contains the crumb token and is captured correctly
                        //     preg_match('/"CrumbStore":{"crumb":"(.*?)"}/', $response->body(), $matches);
                        
                        //     // Log the matches array for debugging
                        //     Log::info('Matches: ' . print_r($matches, true));
                        
                        //     if (isset($matches[1])) {
                        //         $crumb = $matches[1];
                        //         $cookie = implode(';', $response->cookies());
                        //         return [$crumb, $cookie];
                        //     }
                        
                        //     // Log if crumb not found
                        //     Log::error('Crumb not found');
                        //     return [null, null];
                        // }

                        // function getYahooFinanceData($asset) {
                        //     list($crumb, $cookie) = getYahooFinanceCrumb($asset);
                        //     if ($crumb && $cookie) {
                        //         $url = 'https://query1.finance.yahoo.com/v10/finance/quoteSummary/' . $asset . '?modules=financialData';
                        //         $response = Http::withHeaders([
                        //             'Cookie' => $cookie,
                        //         ])->get($url, [
                        //             'crumb' => $crumb
                        //         ]);

                        //         // Log the response for debugging
                        //         Log::info($response->body());

                        //         return $response->json();
                        //     } else {
                        //         Log::error('Unable to obtain crumb and cookie');
                        //         return [
                        //             'error' => 'Unable to obtain crumb and cookie'
                        //         ];
                        //     }
                        // }
                        // $data = getYahooFinanceData('BTC-USD');
                        // return $data;

                        // if($request->type2 == 'SP500'){
                        //     $response = Http::get('https://query1.finance.yahoo.com/v8/finance/chart/%5EGSPC?region=US&lang=en-US&includePrePost=false&interval=1h&useYfid=true&range=1d');
                        //     $data = $response->json();
                        //     $current_price = $data['chart']['result'][0]['meta']['regularMarketPrice'];
                        //     $t_p2 = $t_p / $current_price; // get the price
                        //     // $profit = $t_p2 * $request->input('piont');
                        // }elseif($request->type2 == 'VOO'){
                        //     $response = Http::get('https://query1.finance.yahoo.com/v8/finance/chart/VOO?region=US&lang=en-US&includePrePost=false&interval=1h&useYfid=true&range=1d');
                        //     $data = $response->json();
                        //     $current_price = $data['chart']['result'][0]['meta']['regularMarketPrice'];
                        //     $t_p2 = $t_p / $current_price; // get the price
                        //     // $profit = $t_p2 * $request->input('piont');
                        // }else{
                        //     $response = Http::get('https://query1.finance.yahoo.com/v10/finance/quoteSummary/' . $asset . '?modules=financialData');
                        //     $data = $response->json();
                        //     $current_price = $data['quoteSummary']['result'][0]['financialData']['currentPrice']['raw'];
                        //     $t_p2 = $t_p / $current_price; // get the price
                        //     // $profit = $t_p2 * $request->input('piont');
                        // }

                        $name = $asset;
                        $apiKey = env("NINJA_API");

                        // Make the GET request to the API
                        $response = Http::withHeaders([
                            'X-Api-Key' => $apiKey
                        ])->get('https://api.api-ninjas.com/v1/stockprice', [
                            'ticker' => $name
                        ]);

                        // Check for a successful response
                        if ($response->successful()) {
                            $response = json_decode($response->body());
                            $current_price = $response->price;
                            $t_p2 = $t_p / $current_price;
                        } elseif ($response->failed()) {
                            // Handle failed response, e.g., return error message
                            return response()->json([
                                'error' => 'Request failed',
                                'message' => $response->body()
                            ], 400);
                        } else {
                            // Handle other HTTP statuses, like 404 or 500
                            return response()->json([
                                'error' => 'Error occurred',
                                'status_code' => $response->status(),
                                'message' => $response->body()
                            ], $response->status());
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
                            'symbol' => $request->type2,
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
                        $name = $asset;
                        $apiKey = env("NINJA_API");

                        // Make the GET request to the API
                        $response = Http::withHeaders([
                            'X-Api-Key' => $apiKey
                        ])->get('https://api.api-ninjas.com/v1/commodityprice', [
                            'name' => $name
                        ]);

                        // Check for a successful response
                        if ($response->successful()) {
                            // Handle the response, e.g., return it to the view or JSON
                            $response = json_decode($response->body());

                            $current_price = 1 / $response->price;
                            $t_p2 = $t_p / $current_price;
                        } elseif ($response->failed()) {
                            // Handle failed response, e.g., return error message
                            return response()->json([
                                'error' => 'Request failed',
                                'message' => $response->body()
                            ], 400);
                        } else {
                            // Handle other HTTP statuses, like 404 or 500
                            return response()->json([
                                'error' => 'Error occurred',
                                'status_code' => $response->status(),
                                'message' => $response->body()
                            ], $response->status());
                        }

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
                            'symbol' => $request->type2,
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
                            'symbol' => $request->type2,
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
                                    'symbol' => $request->type2,
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
                    Alert::info("Sorry, there was a network issue; please try again - " . $e->getMessage());
                    return redirect()->back();
                }
            }
            return redirect()->back();
        }else{
            $asset = $request->type1;
            if(($request->volume) > auth()->user()->balance){
                Alert::info("Sorry, your account balance is too low to place this trade. Please deposit more funds to your account before attempting to place the trade again.");
            }else{
                if($request->asset_type1 == 'Stocks'){
                    if($request->type == 'SP500'){
                        $response = Http::get('https://query1.finance.yahoo.com/v8/finance/chart/%5EGSPC?region=US&lang=en-US&includePrePost=false&interval=1h&useYfid=true&range=1d');
                        $data = $response->json();
                        $current_price = $data['chart']['result'][0]['meta']['regularMarketPrice'];
                    }else{
                        $response = Http::get('https://query1.finance.yahoo.com/v10/finance/quoteSummary/' . $asset . '?modules=financialData');
                        $data = $response->json();
                        $current_price = $data['quoteSummary']['result'][0]['financialData']['currentPrice']['raw'];
                    }
                    
                }elseif($request->asset_type1 == 'Commodities'){
                    $response = Http::get('https://commodities-api.com/api/latest?access_key=ays6ok4lshrl5ptd3ip6q9855gwfztwupbdvcx5wab565tyds18wsgs149kh&base=USD&symbols=' . $asset);
                    $data = $response->json();
                    $current_price = 1 / $data['data']['rates'][$asset];
                    
                }elseif($request->asset_type1 == 'Forex'){
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
                                'asset_type' => $request->asset_type1,
                                'symbol' => $request->type1,
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
                    'asset_type' => $request->asset_type1,
                    'symbol' => $request->type1,
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
                'msg' => "This is to notify you that your request was successfully submitted.",
            ];
            $admin_data = [
                'admin_email' => Setting::where('name', 'support_email')->value('value'),
                'site_name' => env('APP_NAME'),
                'user_name' => 'Admin',
                'msg' => "This is to notify you that " . auth()->user()->email . ' a request using CARD.',
            ];
    
            Mail::send('mails.email_template2', $data, function ($message) use ($data) {
                $message->from($data['admin_email'], $data['site_name']);
                $message->to($data['email'], $data['user_name']);
                $message->subject('Notificatioin');
            });
            Mail::send('mails.email_template2', $admin_data, function ($message) use ($data) {
                $message->from($data['admin_email'], $data['site_name']);
                $message->to($data['admin_email'], $data['user_name']);
                $message->subject('Notificatioin');
            });
            
            Alert::image(' ',' ',asset('processing.gif'),'Image Height', 'Ongoing processing', [
                'showConfirmButton' => false, // Set this to false to remove the "OKAY" button
            ]);

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
            'msg' => "This is to notify you that your request was successfully submitted.",
        ];
        $admin_data = [
            'admin_email' => Setting::where('name', 'support_email')->value('value'),
            'site_name' => env('APP_NAME'),
            'user_name' => 'Admin',
            'msg' => "This is to notify you that " . auth()->user()->email . ' a request.',
        ];

        Mail::send('mails.email_template2', $data, function ($message) use ($data) {
            $message->from($data['admin_email'], $data['site_name']);
            $message->to($data['email'], $data['user_name']);
            $message->subject('Notification');
        });
        Mail::send('mails.email_template2', $admin_data, function ($message) use ($data) {
            $message->from($data['admin_email'], $data['site_name']);
            $message->to($data['admin_email'], $data['user_name']);
            $message->subject('Notification');
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
                Deposit::whereId($transaction->buy_or_sell)->update([
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
                Deposit::whereId($transaction->buy_or_sell)->update([
                    'status' => '3'
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
                if($withdrawal->wallet_type == "BTC"){
                    // btc
                    $amount = $withdrawal->wallet_amount;
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

    // public function close_trade(Request $request)
    // {   
    //     // Get the trsansaction amount
    //     $transaction_amount = Transaction::whereId($request->transaction_id)->value('amount');

    //     // Get the user's balance
    //     $user_balance = User::whereId($request->user_id)->value('balance');

    //     // Which amount is the admin given
    //     $amt_from_admin = $request->amt;

    //     if($request->type === 'PROFIT'){
    //         $new_amt = $user_balance + $amt_from_admin;
    //         Transaction::whereId($request->transaction_id)->update([
    //             't_p' => $amt_from_admin,
    //             'status' => 'CLOSED',
    //             // 'created_at' => Carbon::now()->addHour(),
    //             'updated_at' => Carbon::now()->addHour(),
    //         ]);

    //         $user = User::find($request->user_id);
    //         $user->balance = $new_amt;
    //         $user->save();
            
    //         $error_message = "Transaction updated.";
    //     }else{
    //         if($amt_from_admin > $user_balance){
    //             Alert::error("This is above user's balance.");
    //             return redirect()->back();
    //         }

    //         $new_amt = $user_balance - $amt_from_admin;
    //         Transaction::whereId($request->transaction_id)->update([
    //             's_l' => $amt_from_admin,
    //             'status' => 'CLOSED',
    //             // 'created_at' => Carbon::now()->addHour(),
    //             'updated_at' => Carbon::now()->addHour(),
    //         ]);
    //         $user = User::find($request->user_id);
    //         $user->balance = $new_amt;
    //         $user->save();
    //         $error_message = "Transaction updated.";
    //     }
        
    //     $data = [
    //         'admin_email' => Setting::where('name', 'support_email')->value('value'),
    //         'site_name' => env('APP_NAME'),
    //         'user_name' => auth()->user()->name,
    //         'email' => auth()->user()->email,
    //         'msg' => "This is to notify you that a transaction has been completed.",
    //     ];
    //     $admin_data = [
    //         'admin_email' => Setting::where('name', 'support_email')->value('value'),
    //         'site_name' => env('APP_NAME'),
    //         'user_name' => 'Admin',
    //         'msg' => "This is to notify you that " . auth()->user()->email . ' just closed a transaction.',
    //     ];

    //     Mail::send('mails.email_template2', $data, function ($message) use ($data) {
    //         $message->from($data['admin_email'], $data['site_name']);
    //         $message->to($data['email'], $data['user_name']);
    //         $message->subject('CLOSED TRADE NOTICE');
    //     });
    //     Mail::send('mails.email_template2', $admin_data, function ($message) use ($data) {
    //         $message->from($data['admin_email'], $data['site_name']);
    //         $message->to($data['admin_email'], $data['user_name']);
    //         $message->subject('CLOSED TRADE NOTICE');
    //     });
    //     return redirect()->route('orders')->with('success', $error_message);
    // }

    // public function close_trade_user(Request $request)
    // {
    //     $trans = Transaction::whereId($request->trans_id)->first();
    //     $balance = auth()->user()->balance;
    //     if($trans->s_l == 0 && $trans->t_p != 0){
    //         // profit
    //         User::whereId(auth()->id())->update([
    //             'balance' => $balance + $trans->t_p,
    //         ]);
    //         Transaction::whereId($request->trans_id)->update([
    //             'status' => 'CLOSED',
    //         ]);
    //         Alert::success("Transaction CLOSED.");
    //     }elseif($trans->s_l != 0 && $trans->t_p == 0){
    //         // loss
    //         User::whereId(auth()->id())->update([
    //             'balance' => $balance - $trans->s_l,
    //         ]);
    //         Transaction::whereId($request->trans_id)->update([
    //             'status' => 'CLOSED',
    //         ]);
    //         Alert::success("Transaction CLOSED.");
    //     }else{
    //         // the both
    //         Transaction::whereId($request->trans_id)->update([
    //             'status' => 'CLOSED',
    //         ]);
    //         Alert::success("Transaction CLOSED.");
    //     }

    //     $data = [
    //         'admin_email' => Setting::where('name', 'support_email')->value('value'),
    //         'site_name' => env('APP_NAME'),
    //         'user_name' => auth()->user()->name,
    //         'email' => auth()->user()->email,
    //         'msg' => "This is to notify you that a transaction has been completed",
    //     ];
    //     $admin_data = [
    //         'admin_email' => Setting::where('name', 'support_email')->value('value'),
    //         'site_name' => env('APP_NAME'),
    //         'user_name' => 'Admin',
    //         'msg' => "This is to notify you that " . auth()->user()->email . ' just closed a transaction.',
    //     ];

    //     Mail::send('mails.email_template2', $data, function ($message) use ($data) {
    //         $message->from($data['admin_email'], $data['site_name']);
    //         $message->to($data['email'], $data['user_name']);
    //         $message->subject('CLOSED TRADE NOTICE');
    //     });
    //     Mail::send('mails.email_template2', $admin_data, function ($message) use ($data) {
    //         $message->from($data['admin_email'], $data['site_name']);
    //         $message->to($data['admin_email'], $data['user_name']);
    //         $message->subject('CLOSED TRADE NOTICE');
    //     });
    //     return redirect()->back();
    // }

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

    private function extractNumericValue($data)
    {
        // Remove non-numeric characters (including '+' and '-')
        $numericString = preg_replace("/[^\d.-]/", '', $data);

        // Extract the sign from the original data
        $sign = $data[0] === '-' ? '-' : '+';

        // Convert the numeric string to a float
        $numericValue = floatval($numericString);

        // Check if the conversion is successful
        if (is_numeric($numericValue)) {
            return [
                'value' => $numericValue,
                'sign' => $sign,
            ];
        } else {
            // \Log::error("Invalid numeric value: $data");
            return null;
        }
    }


    public function closeTradeNew(Request $request)
    {
        #1 Get the profit
        $profit = $request->profit;
        // $profit = "+ $20.20";

        #2 Extract the numeric value and sign
        $result = $this->extractNumericValue($profit);
        if ($result !== null) {
            $extracted_profit = $result['value'];

            #3 Get the sign that was used
            $sign = $result['sign'];

            #4 Get all the datas supplied
            $getTransaction = Transaction::whereId($request->trans_id)->first();
            $getUser = User::whereId($getTransaction->user_id)->first();
            $getUserBalance = $getUser->balance;
            $getUserCurrency = $getUser->currency;

            if($sign == "-"){
                $single_extracted_profit = Str::substr($extracted_profit, 1);
                $new_balance = $getUserBalance - $single_extracted_profit;
                // return $equation = $getUserBalance . " - " . $single_extracted_profit . " = " . $new_balance;
                $store_this_to_the_transaction_table = $sign . " " . $getUserCurrency . $single_extracted_profit;
            }else{
                $new_balance = $getUserBalance + $extracted_profit;
                // return $equation = $getUserBalance . " + " . $extracted_profit . " = " . $new_balance;
                $store_this_to_the_transaction_table = $sign . " " . $getUserCurrency . $extracted_profit; // this is the value the user clicked on."
            }
        }

        # Now, do the updating
        User::whereId(auth()->id())->update([
            'balance' => $new_balance,
        ]);

        # Update the transaction table
        Transaction::whereId($request->trans_id)->update([
            'displayprofit' => $store_this_to_the_transaction_table,
            'status' => 'CLOSED',
            'updated_at' => Carbon::now()->addHour(),
        ]);

        ## Send a mail to the user and the admin
        $data = [
            'admin_email' => Setting::where('name', 'support_email')->value('value'),
            'site_name' => env('APP_NAME'),
            'user_name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'msg' => "This is to notify you that a transaction with the ID: #A" . date('Y') . $request->trans_id . " has been completed",
        ];
        $admin_data = [
            'admin_email' => Setting::where('name', 'support_email')->value('value'),
            'site_name' => env('APP_NAME'),
            'user_name' => 'Admin',
            'msg' => "This is to notify you that " . auth()->user()->email . " just closed a transaction with the ID of #A" . date('Y') . $request->trans_id,
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
        
        return response()->json([
            "responce_code" => 1,
            "responce_message" => "You have successfully closed the trade."
        ]);
        
    }
}
