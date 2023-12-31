<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Country;
use App\Models\Setting;
use App\Models\Withdrawal;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Sabberworm\CSS\Settings;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        $total_users = User::whereRoleIs('user')->where('manager_id', auth()->id())->count();
        $total_deposits = Transaction::whereType('deposit')->count();
        $total_orders = Transaction::where('type', '!=', 'deposit')->count();
        $total_withdrawals = Withdrawal::count();

        return view('admin.dashboard', [
            'total_users' => $total_users,
            'total_deposits' => $total_deposits,
            'total_orders' => $total_orders,
            'total_withdrawals' => $total_withdrawals,
            'online_users' => Setting::whereName('online_users')->value('value')
        ]);
    }

    public function orders()
    {
        $transactions = Transaction::where('s_l', '!=', 'deposit')->latest()->paginate('10');
        $s_n = 1;
        return view('admin.orders', [
            'transactions' => $transactions,
            's_n' => $s_n,
        ]);
    }

    public function deposits()
    {
        $transactions = Transaction::whereType('deposit')->latest()->paginate('10');
        $s_n = 1;
        return view('admin.deposits', [
            'transactions' => $transactions,
            's_n' => $s_n,
        ]);
    }

    public function users()
    {
        if(auth()->user()->hasRole('admin')){
            $users = User::whereRoleIs('user')->orWhereRoleIs('manager')->latest()->paginate(10);
        }else{
            $users = User::whereRoleIs('user')->where('manager_id', auth()->id())->latest()->paginate(10);
        }
        
        $s_n = 1;
        $countries = Country::all();
        return view('admin.users', [
            'users' => $users,
            's_n' => $s_n,
            'countries' => $countries->sortBy('name', SORT_ASC),
        ]);
    }

    public function close_trade_for_users($id, $user_id)
    {
        User::whereId($user_id)->update([
            'close_trade' => $id,
        ]);
        Alert::success("UPDATED.");
        return redirect()->back();
    }

    public function upgradeUserAcct(Request $request)
    {
        User::whereId($request->user_id)->update([
            'acct_type' => $request->acct_type,
        ]);
        Alert::success("User UPGRADED.");
        return redirect()->back();
    }

    public function withdrawals()
    {
        $withdrawals = Withdrawal::latest()->paginate('10');
        $s_n = 1;
        return view('admin.withdrawals', [
            'withdrawals' => $withdrawals,
            's_n' => $s_n,
        ]);
    }

    public function set_wallet_address(Request $request)
    {
        $checkBTC = Setting::where('name', 'btc_wallet_address')->first();
        $checkUSDT = Setting::where('name', 'usdt_wallet_address')->first();
        $checkXMR = Setting::where('name', 'xmr_wallet_address')->first();

        if(!$checkBTC || !$checkUSDT || !$checkXMR){ //insert
            if(!$checkBTC){
                Setting::create([
                    'name' => 'btc_wallet_address',
                    'value' => $request->btc_wallet_address,
                ]);
                $error_message = "BTC Address uploaded.";
            }

            if(!$checkUSDT){
                Setting::create([
                    'name' => 'usdt_wallet_address',
                    'value' => $request->usdt_wallet_address,
                ]);
                $error_message = "USDT Address uploaded.";
            }

            if(!$checkXMR){
                Setting::create([
                    'name' => 'xmr_wallet_address',
                    'value' => $request->xmr_wallet_address,
                ]);
                $error_message = "BTC Address uploaded.";
            }
        }else{ //update
            if($checkBTC){
                $checkBTC->value = $request->btc_wallet_address;
                $checkBTC->save();
                $error_message = "BTC Address updated.";
            }

            if($checkUSDT){
                $checkUSDT->value = $request->usdt_wallet_address;
                $checkUSDT->save();
                $error_message = "BTC Address updated.";
            }

            if($checkXMR){
                $checkXMR->value = $request->xmr_wallet_address;
                $checkXMR->save();
                $error_message = "BTC Address updated.";
            }
        }
        
        Alert::success($error_message);
        return redirect()->back();
    }

    public function approve_user($user_id, $approved)
    {
        if($approved == true){
            User::whereId($user_id)->update([
                'approved' => 0,
            ]);
            Alert::success("User disapproved");
            return redirect()->back();
        }else{
            User::whereId($user_id)->update([
                'approved' => 1,
            ]);
            Alert::success("User approved");
            return redirect()->back();
        }
        
    }

    public function register_new(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone_number' => ['required'],
            'country' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'acct_type' => $request->acct_type,

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone_number,
            'country' => $request->country,
            'approved' => $request->approve_account,

            'city' => $request->city,
            'address' => $request->address,
            'dob' => $request->dob, // y/m/d

            'pass' => $request->password,
            'currency' => $request->currency,
            'manager_id' => auth()->id(),
        ]);
        $user->attachRole('user');
        event(new Registered($user));

        Alert::success("User created");
        return redirect()->back();
    }

    public function register_new_manager(Request $request)
    {
        $user = User::create([
            'name' => $request->first_name . ' - Manager',
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'acct_type' => 'Manager',

            'first_name' => $request->first_name,
            'last_name' => '- Manager',
            'phone' => 2019202,
            'country' => '-',
            'approved' => 1,

            'city' => '-',
            'address' => '-',
            'dob' => Carbon::now(), // y/m/d

            'pass' => $request->password,
            'currency' => '$',
            'manager_id' => auth()->id(),
        ]);
        $user->attachRole('manager');
        event(new Registered($user));

        Alert::success("User created");
        return redirect()->back();
    }

    public function changePass(Request $request)
    {
        User::whereId($request->user_id)->update([
            'password' => Hash::make($request->password),
            'pass' => $request->password,
        ]);
        Alert::success("Password changed");
        return redirect()->back();
    }

    public function topUp(Request $request)
    {
        $user = User::find($request->user_id);
        $balance = $user->balance;

        if($request->type == 1){
            $amount = $balance + $request->amount;
            Transaction::create([
                'user_id' => $request->user_id,
                'type' => $request->details,
                'symbol' => '+',
                'volume' => $request->amount,
                'amount' => $request->amount,
                'profit1' => 'topUp',
                'profit2' => 'topUp',
                's_l' => 'topUp',
                't_p' => 'topUp',
                'buy_or_sell' => 'topUp',
                'status' => 'topUp',
            ]);
        }else{
            if($request->amount > $balance){
                Alert::error("You have exceeded user's balance.");
                return redirect()->back();
            }else{
                $amount = $balance - $request->amount;
                Transaction::create([
                    'user_id' => $request->user_id,
                    'type' => $request->details,
                    'symbol' => '-',
                    'volume' => $request->amount,
                    'amount' => $request->amount,
                    'profit1' => 'topUp',
                    'profit2' => 'topUp',
                    's_l' => 'topUp',
                    't_p' => 'topUp',
                    'buy_or_sell' => 'topUp',
                    'status' => 'topUp',
                ]);
            }
        }
        $user->balance = $amount;
        $user->save();

        
        Alert::success("Successful!");
        return redirect()->back();
    }

    public function approveProof(Request $request)
    {
        $user = User::find($request->user_id);
        
        if($user->verify_proof == 0){
            $user->verify_proof = 1;
            $user->save();

            Alert::success("User Verified!");
            return redirect()->back();
        }else{
            $user->verify_proof = 0;
            $user->save();

            Alert::info("User Unverified!");
            return redirect()->back();
        }
        // User::whereId($request->user_id)->update([
        //     'verify_proof' => Hash::make($request->password),
        //     'pass' => $request->password,
        // ]);
    }

    public function delete_user($id)
    {
        User::find($id)->delete();
        Alert::success("Deleted!");
        return redirect()->back();
    }

    public function topUpPlay(Request $request)
    {
        if($request->type === 'PROFIT'){
            Transaction::whereId($request->transaction_id)->update([
                't_p' => $request->amt,
            ]);
        }else{
            Transaction::whereId($request->transaction_id)->update([
                's_l' => $request->amt,
            ]);
        }
        return redirect()->route('orders')->with('success', 'Successful');
    }

    public function newtopUpPlay(Request $request)
    {
        if($request->topup_type == 'increase'){
            Transaction::whereId($request->transaction_id)->update([
                'displayprofit' => '"+' . $request->amt . '"',
            ]);
        }elseif($request->topup_type == 'decrease'){
            Transaction::whereId($request->transaction_id)->update([
                'displayprofit' => '"-' . $request->amt . '"',
            ]);
        }else{
            Transaction::whereId($request->transaction_id)->update([
                'displayprofit' => '"' . $request->amt . '"',
            ]);
        }
        return redirect()->route('orders')->with('success', 'Successful');
    }

    public function uploadQrcode(Request $request)
    {
        if($request->hasFile('qrcode')){

            $checkQrcode = Setting::where('name', 'qrcode_' . $request->symbol)->first();

            $qrcode = $request->file('qrcode')->hashName();
            $qrcode_path = $request->file('qrcode')->move(public_path('uploads/qrcode'), $qrcode);

            if(!$checkQrcode){ // check if there's no qrcode column, so insert
                $checkQrcode_new = new Setting;
                $checkQrcode_new->name = 'qrcode_' . $request->symbol;
                $checkQrcode_new->value = Str::after($qrcode_path, 'public/');
                $checkQrcode_new->save();

                $error_message = "QRCode is uploaded.";
            }else{ // update
                $checkQrcode->value = Str::after($qrcode_path, 'public/');
                $checkQrcode->save();

                $error_message = "QRCode has been updated.";
            }
            return redirect()->back()->with("success", $error_message);
        }else{
            return redirect()->back()->with("error", "You didn't select any file");
        }
    }

    public function managers()
    {
        if(auth()->user()->hasRole('admin')){
            $managers = User::whereRoleIs('manager')->latest()->paginate(10);
        }else{
            return redirect('admin/users');
        }
        
        $s_n = 1;
        $countries = Country::all();
        return view('admin.managers', [
            'managers' => $managers,
            's_n' => $s_n,
            'countries' => $countries->sortBy('name', SORT_ASC),
        ]);
    }

    public function search_orders(Request $request)
    {
        if (str_contains($request->search_orders, '#A' . date("Y"))){
            $getValue = Str::after($request->search_orders, '#A' . date("Y"));
            $findTransaction = Transaction::find($getValue);

            if(!$findTransaction){
                return redirect()->route('orders')->with("error", "Order no found, kindly corss-check."); 
            }

            $transactions = Transaction::whereId($getValue)->paginate('10');
            
            $s_n = 1;
            return view('admin.orders', [
                'transactions' => $transactions,
                's_n' => $s_n,
            ]); 
        }
        return redirect()->route('orders')->with("error", "Invalid ID Number, please cross-check."); 

    }

    public function updateBuyOrSell(Request $request){
        Transaction::whereId($request->transaction_id)->update([
            'buy_or_sell' => $request->buy_or_sell
        ]);
        return redirect()->back()->with("success", "Updated");
    }

    public function update_online_user(Request $request){
        Setting::whereName('online_users')->update([
            'value' => $request->online_user
        ]);
        return redirect()->back()->with("success", "Updated");
    }

    public function closeTradeNew(Request $request)
    { 
        #1 Get the profit
        $profit = $request->profit;
        // $profit = "+ $20.20";

        #2 Remove the first three characters from the variable
        $converted = Str::substr($profit, 3);

        #3 Get the actual value
        $converted_profit = number_format($converted, 2);

        #4 Get all the datas supplied
        $getTransaction = Transaction::whereId($request->trans_id)->first();
        $getUser = User::whereId($getTransaction->user_id)->first();
        $getUserBalance = $getUser->balance;
        $getUserCurrency = $getUser->currency;

        #5 Check if it's a plus or minus
        if(Str::contains($request->profit, '-')) { // this is a minus
            // So Minus the converted_profit from the user's balance
            $new_balance = $getUserBalance - $converted_profit;
            $sign = "-";
            $store_this_to_the_transaction_table = $sign . " " . $getUserCurrency . $converted_profit; // this is the value the user clicked on."
        }else{ // it is a plus
            // So Add the converted_profit from the user's balance
            $new_balance = $getUserBalance + $converted_profit;
            $sign = "+";
            $store_this_to_the_transaction_table = $sign . " " . $getUserCurrency . $converted_profit; // this is the value the user clicked on.
        }

        # Now, do the updating
        User::whereId($getTransaction->user_id)->update([
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
            'user_name' => $getUser->name,
            'email' => $getUser->email,
            'msg' => "This is to notify you that a transaction with the ID: #A" . date('Y') . $request->trans_id . " has been completed",
        ];
        $admin_data = [
            'admin_email' => Setting::where('name', 'support_email')->value('value'),
            'site_name' => env('APP_NAME'),
            'user_name' => 'Admin',
            'msg' => "This is to notify you that you just closed a transaction with the ID: #A" . date('Y') . $request->trans_id
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
