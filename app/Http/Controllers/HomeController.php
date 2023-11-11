<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('new_design.welcome');
        return view('welcome');
        return redirect()->route('login');
        // Alert::success('Hello');
        $a = file_get_contents("https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD");
        $b = json_decode($a, true);
        return view('welcome', [
            'btc_amount' => $b['USD'],
        ]);
    }
    public function new_design()
    {
        return view('new_design.welcome');
    }
    public function our_market()
    {
        return view('our_market');
    }
    public function alternative_data()
    {
        return view('alternative_data');
    }
    public function reliably_regulated()
    {
        return view('reliably_regulated');
    }
    public function fairer_trading()
    {
        return view('fairer_trading');
    }
    public function customer_support()
    {
        return view('customer_support');
    }
    public function history()
    {
        $transactions = Transaction::where('user_id', auth()->id())->where('symbol', '!=', '-')->latest()->paginate('10');
        $withdrawals = Withdrawal::where('user_id', auth()->id())->latest()->paginate('10');
        $s_n = 1;
        $s_n2 = 1;
        return view('user.history', [
            'transactions' => $transactions,
            'withdrawals' => $withdrawals,
            's_n' => $s_n,
            's_n2' => $s_n2,
        ]);
    }
    public function account_types()
    {
        return view('account_types');
    }
    public function experts_explain()
    {
        return view('experts_explain');
    }
    public function legals_uk_keyinformationdocs()
    {
        return view('legals_uk_keyinformationdocs');
    }
    public function faq()
    {
        return view('faq');
    }
    public function faq2($id)
    {
        return view('faq2', [
            'id' => $id,
        ]);
    } 
    public function meet_the_team()
    {
        return view('meet_the_team');
    }
    public function partners()
    {
        return view('partners');
    }
    public function our_ambassador()
    {
        return view('our_ambassadors');
    }
    public function brokerage_fee()
    {
        return view('brokerage_fees');
    }
    public function trading_storie()
    {
        return view('trading_stories');
    }
    public function legals()
    {
        return view('legals');
    }


    
    public function why_trade_with_us()
    {
        return view('new_design.why_trade_with_us');
    }
    public function trading_costs()
    {
        return view('new_design.trading_costs');
    }
    public function trading_tools()
    {
        return view('new_design.trading_tools');
    }
    public function trading_explained()
    {
        return view('new_design.trading_explained');
    }
    public function markets()
    {
        return view('new_design.markets');
    }
    public function our_platforms()
    {
        return view('new_design.our_platforms');
    }
    public function market_information()
    {
        return view('new_design.market_information');
    }
    public function insights_hub()
    {
        return view('new_design.insights_hub');
    }
    public function about_us()
    {
        return view('new_design.about_us');
    }
    public function articles_day_trading()
    {
        return view('new_design.articles_day_trading');
    }
    public function articles_swing_trading()
    {
        return view('new_design.articles_swing_trading');
    }
    public function articles_scalping_trading()
    {
        return view('new_design.articles_scalping_trading');
    }
    public function articles_trading_vs_day_trading()
    {
        return view('new_design.articles_trading_vs_day_trading');
    }
    public function articles_technical_analysis()
    {
        return view('new_design.articles_technical_analysis');
    }
    public function articles_fundamental_analysis()
    {
        return view('new_design.articles_fundamental_analysis');
    }
    public function articles_what_time_does_forex_market_open()
    {
        return view('new_design.articles_what_time_does_forex_market_open');
    }
    public function articles_market_open_times()
    {
        return view('new_design.articles_market_open_times');
    }    
    public function faqs()
    {
        return view('new_design.faqs');
    }
    public function legals_new()
    {
        return view('new_design.legals');
    }
    public function legals_id($id)
    {;
        return view('new_design.legals_id', [
            'data' => $id,
        ]);
    }
    public function account_types_new()
    {
        return view('new_design.account_types');
    }
    public function our_ambassadors_new()
    {
        return view('new_design.our_ambassadors');
    }
    public function trading_stories_new()
    {
        return view('new_design.trading_stories');
    }
    public function brokerage_fees_new()
    {
        return view('new_design.brokerage_fees');
    }
}
