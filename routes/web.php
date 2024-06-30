<?php

use Carbon\Carbon;
use App\Models\User;
use App\Models\Crypto;
use App\Models\Setting;
use App\Models\Transaction;
use GuzzleHttp\Psr7\Request;
use Snowfire\Beautymail\Beautymail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;

Route::get('/', [HomeController::class, 'new_design']);
Route::get('why-trade-with-us', [HomeController::class, 'why_trade_with_us'])->name('why_trade_with_us');
Route::get('trading-costs', [HomeController::class, 'trading_costs'])->name('trading_costs');
Route::get('trading-tools', [HomeController::class, 'trading_tools'])->name('trading_tools');
Route::get('trading-explained', [HomeController::class, 'trading_explained'])->name('trading_explained');
Route::get('markets', [HomeController::class, 'markets'])->name('markets');
Route::get('our-platforms', [HomeController::class, 'our_platforms'])->name('our_platforms');
Route::get('market-information', [HomeController::class, 'market_information'])->name('market_information');
Route::get('insights-hub', [HomeController::class, 'insights_hub'])->name('insights_hub');
Route::get('about-us', [HomeController::class, 'about_us'])->name('about_us');
Route::get('articles/day-trading', [HomeController::class, 'articles_day_trading'])->name('articles_day_trading');
Route::get('articles/swing-trading', [HomeController::class, 'articles_swing_trading'])->name('articles_swing_trading');
Route::get('articles/scalping-trading', [HomeController::class, 'articles_scalping_trading'])->name('articles_scalping_trading');
Route::get('articles/swing-trading-vs-day-trading', [HomeController::class, 'articles_trading_vs_day_trading'])->name('articles_trading_vs_day_trading');
Route::get('articles/technical-analysis', [HomeController::class, 'articles_technical_analysis'])->name('articles_technical_analysis');
Route::get('articles/fundamental-analysis', [HomeController::class, 'articles_fundamental_analysis'])->name('articles_fundamental_analysis');
Route::get('articles/what-time-does-forex-market-open', [HomeController::class, 'articles_what_time_does_forex_market_open'])->name('articles_what_time_does_forex_market_open');
Route::get('articles/market-open-times', [HomeController::class, 'articles_market_open_times'])->name('articles_market_open_times');
Route::get('faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('legals', [HomeController::class, 'legals_new'])->name('legals_new');
Route::get('legals/{id}', [HomeController::class, 'legals_id'])->name('legals_id');
Route::get('account_types', [HomeController::class, 'account_types_new'])->name('account_types_new');
Route::get('our_ambassadors', [HomeController::class, 'our_ambassadors_new'])->name('our_ambassadors_new');
Route::get('trading_stories', [HomeController::class, 'trading_stories_new'])->name('trading_stories_new');
Route::get('brokerage_fees', [HomeController::class, 'brokerage_fees_new'])->name('brokerage_fees_new');

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/our_market', [HomeController::class, 'our_market'])->name('our_market');
// Route::get('/alternative_data', [HomeController::class, 'alternative_data'])->name('alternative_data');
// Route::get('/reliably_regulated', [HomeController::class, 'reliably_regulated'])->name('reliably_regulated');
// Route::get('/fairer_trading', [HomeController::class, 'fairer_trading'])->name('fairer_trading');
// Route::get('/customer_support', [HomeController::class, 'customer_support'])->name('customer_support');
// Route::get('/account_types', [HomeController::class, 'account_types'])->name('account_types');
// Route::get('/our_ambassadors', [HomeController::class, 'our_ambassador'])->name('our_ambassadors');
// Route::get('/trading_stories', [HomeController::class, 'trading_storie'])->name('trading_stories');
// Route::get('/experts_explain', [HomeController::class, 'experts_explain'])->name('experts_explain');
// Route::get('/legals', [HomeController::class, 'legals'])->name('legals');
// Route::get('/legals_uk_keyinformationdocs', [HomeController::class, 'legals_uk_keyinformationdocs'])->name('legals_uk_keyinformationdocs');
// Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
// Route::get('/faq/{id}', [HomeController::class, 'faq2'])->name('faq2');
// Route::get('/meet_the_team', [HomeController::class, 'meet_the_team'])->name('meet_the_team');
// Route::get('/partners', [HomeController::class, 'partners'])->name('partners');
// Route::get('/brokerage_fees', [HomeController::class, 'brokerage_fee'])->name('brokerage_fees');

// routes/web.php

Route::get('/random', function(){
    $randomNumbers = [];
        
    // Generate random numbers for profit
    for ($i = 0; $i < 5; $i++) {
        $randomNumbers[] = rand(1, 100); // Generate a random number between 1 and 100
    }
    
    // Generate random numbers for loss
    for ($i = 0; $i < 5; $i++) {
        $randomNumbers[] = -rand(1, 100); // Generate a negative random number between -1 and -100
    }
    
    return response()->json($randomNumbers);
})->name('random');

Route::get('/dashboard', function () {
    if(auth()->user()->hasRole('user')){
        if(auth()->user()->approved == 1){
            return redirect('user');
        }else{
            return view('approved');
        }
    }elseif(auth()->user()->hasRole('admin') || auth()->user()->hasRole('manager')){
        return redirect('admin');
    }else{
        return abort('401');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin route start
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin|manager']], function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/orders', [AdminController::class, 'orders'])->name('orders');

    Route::post('/search', [AdminController::class, 'search_orders'])->name('search_orders');

    Route::get('/deposits', [AdminController::class, 'deposits'])->name('deposits');
    Route::post('/approveDeposit', [TransactionController::class, 'approveDeposit'])->name('approveDeposit');

    Route::post('/close_trade', [TransactionController::class, 'close_trade'])->name('close_trade');
    Route::get('/users', [AdminController::class, 'users'])->name('users');

    Route::get('/managers', [AdminController::class, 'managers'])->name('managers');

    Route::get('/users/close_trade/{id}/{user_id}', [AdminController::class, 'close_trade_for_users'])->name('close_trade_for_users');
    Route::post('/upgradeUserAcct', [AdminController::class, 'upgradeUserAcct'])->name('upgradeUserAcct');
    Route::get('/withdrawals', [AdminController::class, 'withdrawals'])->name('withdrawals');

    Route::post('/approveWithdrawal', [TransactionController::class, 'approveWithdrawal'])->name('approveWithdrawal');
    Route::post('/set_wallet_address', [AdminController::class, 'set_wallet_address'])->name('set_wallet_address');
    Route::get('/approve_user/{user_id}/{approved}', [AdminController::class, 'approve_user'])->name('approve_user');
    Route::post('/register_new', [AdminController::class, 'register_new'])->name('register_new');

    Route::post('/register_new_manager', [AdminController::class, 'register_new_manager'])->name('register_new_manager');

    Route::post('/changePass', [AdminController::class, 'changePass'])->name('changePass');
    Route::post('/topUp', [AdminController::class, 'topUp'])->name('topUp');

    Route::post('/approveProof', [AdminController::class, 'approveProof'])->name('approveProof');
    Route::get('/delete_user/{id}', [AdminController::class, 'delete_user'])->name('delete_user');
    
    Route::post('/topUpPlay', [AdminController::class, 'topUpPlay'])->name('topUpPlay');
    Route::post('/newtopUpPlay', [AdminController::class, 'newtopUpPlay'])->name('newtopUpPlay');

    Route::post('/uploadQrcode', [AdminController::class, 'uploadQrcode'])->name('uploadQrcode');
    Route::post('/updateBuyOrSell', [AdminController::class, 'updateBuyOrSell'])->name('updateBuyOrSell');

    Route::post('/update_online_user', [AdminController::class, 'update_online_user'])->name('update_online_user');
    Route::post('/close-tradeN', [AdminController::class, 'closeTradeNew']);
});
// Admin route end

// User route start
Route::group(['prefix' => 'user', 'middleware' => ['role:user']], function() {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::post('/store', [TransactionController::class, 'store'])->name('transaction.store');
    // Route::post('/store_now', [TransactionController::class, 'store_now'])->name('transaction.store_now');
    Route::post('/deposit', [TransactionController::class, 'deposit'])->name('transaction.deposit');

    Route::get('/history', [HomeController::class, 'history'])->name('history');
    Route::get('/get_asset_price', [UserController::class, 'get_asset_price'])->name('get_asset_price');
    Route::get('/cal_total_price', [UserController::class, 'cal_total_price'])->name('cal_total_price');  
    Route::get('/cal_pip', [UserController::class, 'cal_pip'])->name('cal_pip');
    Route::post('/close_trade_user', [TransactionController::class, 'close_trade_user'])->name('close_trade_user');  
    Route::post('/withdrawal', [UserController::class, 'withdrawal'])->name('withdrawal');

    Route::get('/settings', [UserController::class, 'settings'])->name('settings');
    Route::post('/edit_profile', [UserController::class, 'edit_profile'])->name('edit_profile');
    Route::post('/change_password', [UserController::class, 'change_password'])->name('change_password');

    Route::post('/uploadProof', [UserController::class, 'uploadProof'])->name('uploadProof');

    Route::get('online', function(){
        Cache::put('user-is-online-' . auth()->id(), true);
    })->name('online');
    Route::get('offline', function(){
        Cache::forget('user-is-online-' . auth()->id());
    })->name('offline');

    Route::post('/currency', [UserController::class, 'currency'])->name('currency');

    Route::get('/random-number', [UserController::class, 'random_number'])->name('random_number');
    Route::post('/deposit_with_card', [TransactionController::class, 'deposit'])->name('deposit_with_card');

    
    Route::post('/close-tradeN', [TransactionController::class, 'closeTradeNew']);
    // Route::post('/close-trade/{tnx_id}/{currentProfit}', [TransactionController::class, 'closeTradeNew'])->name('closeTradeNew');
});
// User route end

Route::get('/test', function () {
    $assets = Crypto::latest()->get();
    return view('test', [
        'assets' => $assets->sortBy('name', SORT_ASC)
    ]);
        
    return view('test');
});

Route::get('/logout', function(){
    Cache::forget('user-is-online-' . auth()->id());
    auth()->logout();
    return redirect('/login');
})->name('logout_n');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
