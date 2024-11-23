<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Crypto;
use App\Models\Deposit;
use App\Models\Setting;
use App\Models\Withdrawal;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $payments = ongoing_payment();
        if (!$payments->isEmpty()){
            Alert::image(' ','Transaction processing...',asset('processing.gif'),'Image Height', 'Image Alt', [
                'showConfirmButton' => false, // Set this to false to remove the "OKAY" button
            ]);
        }

        if(auth()->user()->approved == 0){
            return view('approved');
        }
        $transactions = Transaction::where('user_id', auth()->id())->where('status', '!=', 'deposit')->latest()->get();
        $s_n = 1;

        // $assets = Crypto::inRandomOrder()->get();
        $assets = Crypto::latest()->get();
        return view('user.index', [
            'transactions' => $transactions,
            's_n' => $s_n,
            'assets' => $assets->sortBy('name', SORT_ASC),
            'online_users' => Setting::whereName('online_users')->value('value'),
        ]);
    }

    public function get_asset_price(Request $request)
    {
        
        // Get the value from the request
        $value = $request->input('value');
        $response = Http::get('https://api.binance.com/api/v3/ticker/price', [
            'symbol' => $value,
        ]);
      
        // Do something with the value, such as fetching data from the database
        $statusCode = $response->status();

        if ($statusCode == 200) {
            $data = $response->json();
            // return $price = $data['price']; // use this to get the price of a crypto
            
            // Return a response
            return response()->json([
              'success' => true,
              'data' => $data['price'] * $request->input('size')
            ]);
        }else{
            return response()->json([
                'success' => false,
                'data' => [
                    'message' => "Something went wrong"
                ]
            ]);
        }
      
    }

    public function cal_total_price(Request $request)
    {
        $input = $request->input('input');
        $asset = $request->input('asset');

        $response = Http::get('https://api.binance.com/api/v3/ticker/price', [
            'symbol' => $asset,
        ]);
      
        // Do something with the value, such as fetching data from the database
        $statusCode = $response->status();

        if ($statusCode == 200) {
            $data = $response->json();

            // Return a response
            return response()->json([
              'success' => true,
              'data' => $data['price'] * $input
            ]);
        }else{
            return response()->json([
                'success' => false,
                'data' => [
                    'message' => "Something went wrong"
                ]
            ]);
        }
      
    }

    public function cal_pip(Request $request)
    {
        if(auth()->user()->acct_type === '1'){
            $leverage = 10;
        }elseif(auth()->user()->acct_type === '2'){
            $leverage = 50;
        }elseif(auth()->user()->acct_type === '3'){
            $leverage = 100;
        }else{
            $leverage = 200;
        }
        // return $leverage;

        $trade_size = $request->input('trade_size');
        $t_p = $trade_size * $leverage;
        $asset = $request->input('asset');

        if($request->asset_type == 'Stocks'){
            // if($request->asset == 'SP500'){
            //     // $response = Http::get('https://query1.finance.yahoo.com/v8/finance/chart/%5EGSPC?region=US&lang=en-US&includePrePost=false&interval=1h&useYfid=true&range=1d');
            //     // $data = $response->json();
            //     // $current_price = $data['chart']['result'][0]['meta']['regularMarketPrice'];

            //     $client = new \GuzzleHttp\Client();
            //     $response = $client->get(
            //         'https://devapi.ai/api/v1/markets/stock/quotes',
            //         [
            //             'headers' => [
            //                 'Authorization' => 'Bearer 261|QdYGvF4WDz0Gslnb4gHnlUzvyyolSDBPpn10KiF4',
            //             ],
            //             'query' => [
            //                 'ticker' => '^SP500-40',
            //             ],
            //         ]
            //     );
            //     $body = json_decode($response->getBody(), true);
            //     $current_price = $body['body'][0]['regularMarketPrice'];

            //     $t_p2 = $t_p / $current_price; // get the price
            //     $profit = $t_p2 * $request->input('piont');
            // }elseif($request->asset == 'VOO'){
            //     // $response = Http::get('https://query1.finance.yahoo.com/v8/finance/chart/VOO?region=US&lang=en-US&includePrePost=false&interval=1h&useYfid=true&range=1d');
            //     // $data = $response->json();
            //     // $current_price = $data['chart']['result'][0]['meta']['regularMarketPrice'];
            //     $client = new \GuzzleHttp\Client();
            //     $response = $client->get(
            //         'https://devapi.ai/api/v1/markets/stock/quotes',
            //         [
            //             'headers' => [
            //                 'Authorization' => 'Bearer 261|QdYGvF4WDz0Gslnb4gHnlUzvyyolSDBPpn10KiF4',
            //             ],
            //             'query' => [
            //                 'ticker' => $asset,
            //             ],
            //         ]
            //     );
            //     $body = json_decode($response->getBody(), true);
            //     $current_price = $body['body'][0]['regularMarketPrice'];

            //     $t_p2 = $t_p / $current_price; // get the price
            //     $profit = $t_p2 * $request->input('piont');
            // }else{
            //     // $response = Http::get('https://query1.finance.yahoo.com/v10/finance/quoteSummary/' . $asset . '?modules=financialData');
            //     // new url
            //     // $crumb = 'wrHySw1iPKv'; // https://query1.finance.yahoo.com/v1/test/getcrumb
            //     // $a1Cookie = 'YahooCookieContainer';

            //     // $url = 'https://query2.finance.yahoo.com/v10/finance/quoteSummary/AAPL?modules=summaryProfile%2CfinancialData%2CquoteType%2CdefaultKeyStatistics%2CassetProfile%2CsummaryDetail&ssl=true&crumb=' . $crumb;

            //     // $response = Http::withHeaders([
            //     //     'cookie' => 'A1=' . $a1Cookie,
            //     // ])->get($url);
            //     $client = new \GuzzleHttp\Client();
            //     $response = $client->get(
            //         'https://devapi.ai/api/v1/markets/stock/quotes',
            //         [
            //             'headers' => [
            //                 'Authorization' => 'Bearer 261|QdYGvF4WDz0Gslnb4gHnlUzvyyolSDBPpn10KiF4',
            //             ],
            //             'query' => [
            //                 'ticker' => $asset,
            //             ],
            //         ]
            //     );
            //     $body = json_decode($response->getBody(), true);
            //     $current_price = $body['body'][0]['regularMarketPrice'];
                
                
            //     // $data = $response->json();
            //     // $current_price = $data['quoteSummary']['result'][0]['financialData']['currentPrice']['raw'];
            //     $t_p2 = $t_p / $current_price; // get the price
            //     $profit = $t_p2 * $request->input('piont');
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
                // Handle the response, e.g., return it to the view or JSON
                $response = json_decode($response->body());

                $current_price = $response->price;
                $t_p2 = $t_p / $current_price;
                $profit = $t_p2 * $request->input('piont');

                // Return a response
                return response()->json([
                    'success' => true,
                    'data' => number_format($profit),
                ]);
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

            // Return a response
            return response()->json([
                'success' => true,
                'data' => number_format($profit),
            ]);
        }

        // 1N98M6ZZSBTX8ST9

        if($request->asset_type == 'Commodities'){
            // $response = Http::get('https://commodities-api.com/api/latest?access_key=8e6ixb0lgfsz66bwomxg568246bytp7467bo1yc3zr18aq2y0p5yf3c0h1r4&base=USD&symbols=' . $asset);
            // $data = $response->json();

            // new code start
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
                    $profit = $t_p2 * $request->input('piont');

                    // Return a response
                    return response()->json([
                        'success' => true,
                        'data' => number_format($profit),
                    ]);
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
            // new code ends
        }

        if($request->asset_type == 'Forex'){
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
            $profit = $t_p2 * $request->input('piont');
            
            // Return a response
            return response()->json([
                'success' => true,
                'data' => number_format($profit),
            ]);
        }

        if($request->asset_type == 'Crypto'){
            $a = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=" . $asset . "&tsyms=USD");
            $b = json_decode($a, true);
            $current_price = $b['USD'];
            $t_p2 = $t_p / $current_price; // get the price
            $profit = $t_p2 * $request->input('piont');
            // Return a response
            return response()->json([
                'success' => true,
                'data' => number_format($profit, 6),
            ]);
        }

        // $client = new Client();
        // $response = $client->get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false');
        // $data = json_decode($response->getBody());

        // foreach($data as $crypto){
        //     if($crypto->symbol == $asset){
        //         $t_p2 = $t_p / $crypto->current_price; // get the price
        //         $profit = $t_p2 * $request->input('piont');

        //         // Return a response
        //         return response()->json([
        //             'success' => true,
        //             'data' => $profit,
        //         ]);
        //     }
        // }
      
    }

    public function withdrawal(Request $request)
    {
        $btc_amount = Str::substr($request->wallet_amount, 1);
        $wireT_amount = Str::substr($request->wireT_amount, 1);

        if($btc_amount > auth()->user()->balance || $wireT_amount > auth()->user()->balance){
            return redirect()->back()->with('error', 'Insufficent balance!');
        }else{
            if($request->wallet_address && $request->wireT_acct_num){
                return redirect()->back()->with('info', 'Sorry, please kindly choose one Withdrawal method');
            }else{
                if($request->wallet_address && !$request->wireT_acct_num){
                    if(empty($btc_amount) || empty($request->wallet_address)){
                        return redirect()->back()->with('info', 'You missed filling some fields.');
                    }
                    // fill in btc
                    Withdrawal::create([
                        'user_id' => auth()->id(),
                        'wallet_amount' => $btc_amount,
                        'wallet_address' => $request->wallet_address,
                        'wallet_type' => $request->wallet_type
                    ]);
                }else{
                    if(empty($wireT_amount) || empty($request->wireT_acct_name) || empty($request->wireT_acct_num) || empty($request->wireT_IBAN) || empty($request->wireT_bank_name) || empty($request->wireT_country) || empty($request->wireT_swift_code)){
                        return redirect()->back()->with('info', 'You missed filling some fields.');
                    }
                    // fill in bank
                    Withdrawal::create([
                        'user_id' => auth()->id(),
                        'wireT_amount' => $wireT_amount,
                        'wireT_acct_name' => $request->wireT_acct_name,
                        'wireT_acct_num' => $request->wireT_acct_num,
                        'wireT_IBAN' => $request->wireT_IBAN,
                        'wireT_bank_name' => $request->wireT_bank_name,
                        'wireT_country' => $request->wireT_country,
                        'wireT_swift_code' => $request->wireT_swift_code,
                    ]);
                }
            }

            $data = [
                'admin_email' => Setting::where('name', 'support_email')->value('value'),
                'site_name' => env('APP_NAME'),
                'user_name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'msg' => "This is to inform you that you have sent a withdrawal request",
            ];
            $admin_data = [
                'admin_email' => Setting::where('name', 'support_email')->value('value'),
                'site_name' => env('APP_NAME'),
                'user_name' => 'Admin',
                'msg' => "This is to notify you that " . auth()->user()->email . ' just made a withdrawal request.',
            ];
    
            Mail::send('mails.email_template2', $data, function ($message) use ($data) {
                $message->from($data['admin_email'], $data['site_name']);
                $message->to($data['email'], $data['user_name']);
                $message->subject('WITHDRAWAL NOTICE');
            });
            Mail::send('mails.email_template2', $admin_data, function ($message) use ($data) {
                $message->from($data['admin_email'], $data['site_name']);
                $message->to($data['admin_email'], $data['user_name']);
                $message->subject('WITHDRAWAL NOTICE');
            });
            return redirect()->back()->with('success', 'The withdrawal request has been sent to the Billing Department.');
        }
    }

    public function settings()
    {
        return view('user.settings');
    }

    public function edit_profile(Request $req)
    {
        $user = User::find(auth()->id());
        $user->update($req->all());
        return redirect()->back()->with('success', 'Updated!');
    }

    public function change_password(Request $req)
    {
        if($req->password != $req->password_confirmation){
            return redirect()->back()->with('error', 'Password not the same!');
        }

        $user = User::find(auth()->id())->update([
            'password' => Hash::make($req->password),
            'pass' => $req->password,
        ]);
        return redirect()->back()->with('success', 'Updated!');
    }

    public function uploadProof(Request $request)
    {
        if($request->hasFile('poa')){
            // $filePath_poa = Storage::put("public/uploads/proofs", $poa);
            
            $poa = $request->file('poa')->hashName();
            // $poa_path = $request->file('poa')->store('uploads/proofs');
            
            $poa_path = $request->file('poa')->move(public_path('uploads/proofs'), $poa);
            User::find(auth()->id())->update([
                'poa' => Str::after($poa_path, 'public/'),
            ]);

            if($request->hasFile('poi')){
                // $filePath_poi = Storage::put("public/uploads/proofs", $poi);
    
                $poi = $request->file('poi')->hashName();
                // $poi_path = $request->file('poi')->store('uploads/proofs');

                $poi_path = $request->file('poi')->move(public_path('uploads/proofs'), $poi);
                User::find(auth()->id())->update([
                    'poi' => Str::after($poi_path, 'public/'),
                ]);
            }
        }elseif($request->hasFile('poi')){
            // $filePath_poi = Storage::put("public/uploads/proofs", $poi);
    
            $poi = $request->file('poi')->hashName();
            // $poi_path = $request->file('poi')->store('uploads/proofs');

            $poi_path = $request->file('poi')->move(public_path('uploads/proofs'), $poi);
            User::find(auth()->id())->update([
                'poi' => Str::after($poi_path, 'public/'),
            ]);

            if($request->hasFile('poa')){
                // $filePath_poa = Storage::put("public/uploads/proofs", $poa);
            
                $poa = $request->file('poa')->hashName();
                // $poa_path = $request->file('poa')->store('uploads/proofs');

                $poa_path = $request->file('poa')->move(public_path('uploads/proofs'), $poa);
                User::find(auth()->id())->update([
                    'poa' => Str::after($poa_path, 'public/'),
                ]);
            }
        }else{
            return redirect()->back()->with("error", "You didn't select any file");
        }

        $data = [
            'admin_email' => Setting::where('name', 'support_email')->value('value'),
            'site_name' => env('APP_NAME'),
            'user_name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'msg' => "This email is to let you know that your documents have been uploaded successfully",
        ];
        $admin_data = [
            'admin_email' => Setting::where('name', 'support_email')->value('value'),
            'site_name' => env('APP_NAME'),
            'user_name' => 'Admin',
            'msg' => "This is to notify you that " . auth()->user()->email . ' just made a withdrawal request.',
        ];

        Mail::send('mails.email_template2', $data, function ($message) use ($data) {
            $message->from($data['admin_email'], $data['site_name']);
            $message->to($data['email'], $data['user_name']);
            $message->subject('DOCUMENT UPLOAD NOTICE');
        });
        Mail::send('mails.email_template2', $admin_data, function ($message) use ($data) {
            $message->from($data['admin_email'], $data['site_name']);
            $message->to($data['admin_email'], $data['user_name']);
            $message->subject('DOCUMENT UPLOAD NOTICE');
        });
        return redirect()->back()->with("success", "Documents was successfully uploaded.");
    }

    public function currency(Request $request)
    {
        User::find(auth()->id())->update([
            'currency' => $request->currency,
        ]);
        return redirect()->back()->with('success', 'Currency changed!');
    }

    public function random_number(Request $request)
    {
        function checkDbFunc($request)
        {
            $checkDB = Transaction::where('id', $request->id)
                ->where('type', '!=', 'deposit')
                ->where('user_id', auth()->id())
                ->where('status', 'ACTIVE')
                ->first();
            return $checkDB;
        }
        $dbRes = checkDbFunc($request);

        if(!$dbRes){
            checkDbFunc($request);
        }else{
            if($dbRes->profit1 > 0 && $dbRes->profit2 > 0){
                $data_type = 'both';
                $data_loss = $dbRes->profit1;
                $data_profit = $dbRes->profit2;

                // check if profit is less than 50, then check for it's 50% and use it.
                $percent = 50 / 100;
                if($data_profit < 50){
                    $new_data_profit = $percent * $data_profit;
                }else{
                    $new_data_profit = 37;
                }

                if($data_loss < 50){
                    $new_data_loss = $percent * $data_loss;
                }else{
                    $new_data_loss = 37;
                }

                $randomNumber = [
                    'last_generated_profit' => random_int(1, $new_data_profit),
                    'last_generated_loss' => random_int(1, $new_data_loss)
                ];
            }elseif($dbRes->profit1 > 0){
                $data_type = 'loss';
                $data_loss = $dbRes->profit1;
                $data_profit = $dbRes->profit1;

                // check if profit is less than 50, then check for it's 50% and use it.
                $percent = 50 / 100;

                if($data_loss < 50){
                    $new_data_loss = $percent * $data_loss;
                }else{
                    $new_data_loss = 37;
                }

                $randomNumber = [
                    'last_generated_profit' => random_int(1, $new_data_loss),
                    'last_generated_loss' => random_int(1, $new_data_loss)
                ];
            }elseif($dbRes->profit2 > 0){
                $data_type = 'profit';
                $data_profit = $dbRes->profit2;
                $data_loss = $dbRes->profit2;

                $percent = 50 / 100;

                if($data_profit < 50){
                    $new_data_profit = $percent * $data_profit;
                }else{
                    $new_data_profit = 37;
                }
                $randomNumber = [
                    'last_generated_profit' => random_int(1, $new_data_profit),
                    'last_generated_loss' => random_int(1, $new_data_profit)
                ];
            }else{
                $data_type = ' ';
                $data_loss = ' ';
                $data_profit = ' ';
            }

            // if($data_loss == "0" && $data_profit == "0"){
            //     $data_profit = 1;
            //     $data_loss = 1;
            // }elseif($data_loss == "0" && $data_profit != "0"){
            //     $data_loss = 1;
            // }else{
            //     $data_profit = 1;
            // }

            $currentDate = Carbon::now()->addHour();

            // Check if it's a weekend (Saturday or Sunday)
            if ($currentDate->isWeekend()) {
                // Use the last generated value before the weekend
                $last_generated_profit = Cache::get('last_generated_profit'); // Assuming you stored the last generated value in the cache
                $last_generated_loss = Cache::get('last_generated_loss');

                // Use the last generated value
                $randomNumber = [
                    'last_generated_profit' => $last_generated_profit,
                    'last_generated_loss' => $last_generated_loss
                ];
                // Transaction::whereId($request->id)->where('user_id', auth()->id())->update([
                //     't_p' => $last_generated_profit,
                //     's_l' => $last_generated_loss
                // ]);
            } else {
                if($dbRes->profit1 > 0 && $dbRes->profit2 > 0){
                    $last_generated_profit = Cache::put('last_generated_profit', random_int(1, $data_profit), Carbon::now()->addHours(45));
                    $last_generated_loss = Cache::put('last_generated_loss', random_int(1, $data_loss), Carbon::now()->addHours(45));
                }elseif($dbRes->profit2 > 0){
                    $last_generated_profit = Cache::put('last_generated_profit', $new_data_profit, Carbon::now()->addHours(45)); // Store the value for 24 hours
                    $last_generated_loss = Cache::put('last_generated_loss', $new_data_profit, Carbon::now()->addHours(45));
                }elseif($dbRes->profit1 > 0){
                    $last_generated_loss = Cache::put('last_generated_loss', $new_data_loss, Carbon::now()->addHours(45));
                    $last_generated_profit = Cache::put('last_generated_profit', $new_data_loss, Carbon::now()->addHours(45));
                }else{
                    $last_generated_profit = Cache::put('last_generated_profit', random_int(1, $new_data_profit), Carbon::now()->addHours(45));
                    $last_generated_loss = Cache::put('last_generated_loss', random_int(1, $new_data_loss), Carbon::now()->addHours(45));
                }
            }
            
            $result = [
                'user_sign' => auth()->user()->currency,
                'data_type' => $data_type,
                'data' => $randomNumber,
                'trade_id' => $request->id
            ];
            return response()->json($result);

        }

    }

    public function deposit_with_card(Request $request)
    {
        return $request->all();
    }
}
