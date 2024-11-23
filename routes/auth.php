<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Models\SecurityPin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');

    Route::post('/login', function (Request $request) {
        // Validate the user input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Generate a security PIN
            $code = rand(100000, 999999);
            $user = Auth::user();
    
            if($user->security_on_or_off == 0){
                // log him in
                $user->security_verified = true;
                $user->save();
    
                $user = User::find($user->id);
                Auth::login($user);
                if ($user->hasRole(['admin','superadmin'])) {
                    return redirect()->route('dashboard');
                }else{
                    return redirect()->route('dashboard');
                }
            }
    
            // Store the PIN in session
            SecurityPin::create([
                "code" => $code,                
                "user_id" => $user->id,              
                "status" => 0,              
            ]);
    
            // Set security_verified to false in the database
            $user->security_verified = false;
            $user->save();
    
            // Send main to the user
            $data = [
                'admin_email' => env('MAIL_FROM_ADDRESS'),
                'site_name' => env('APP_NAME'),
                'user_name' => Auth::user()->first_name,
                'user_email' => Auth::user()->email,
                'msg' => "On " . Carbon::now() . " you attempted to login to your dashboard. 
                If this was you, please use the code below to proceed with the login: " . $code
            ];

            Mail::send('mails.email_template2', $data, function ($message) use ($data) {
                $message->from($data['admin_email'], $data['site_name']);
                $message->to($data['user_email'], $data['user_name']);
                $message->subject('CONFIRM YOUR SECURITY CODE AND LOGIN');
            });
    
            // Redirect the user to the PIN verification page
            return redirect()->route('login_verify_pin');
        }
    
        // If login fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    })->name('login_');
    
});

Route::middleware('auth')->group(function () {
    Route::get('/verify-login', function (Request $request){
        if(auth()->user()->security_verified == 1){
            return redirect()->route('dashboard');
        }
        return view('auth.login_verify_pin');
    })->name('login_verify_pin')->middleware('auth');
    
    Route::post('/verify-login', function (Request $request){
        // Validate the user input
        $request->validate([
            'code' => 'required',
        ]);
    
        // status == 1 means it's been used.
        $securityPin = SecurityPin::where('status', 0)
            ->where('code', $request->code)
            ->where('status', 0)
            ->where('user_id', Auth::id())
        ->first();
    
        $user = Auth::user();
    
    
        if ($securityPin) {
            // Mark the code as used
            $securityPin->delete();
    
            // Update the user's security_verified status
            $user->security_verified = true;
            $user->save();
    
            // Redirect to the dashboard
            if ($user->hasRole(['admin','superadmin'])) {
                return redirect()->route('dashboard');
            }else{
                return redirect()->route('dashboard');
            }
        }else{
            return back()->withErrors([
                'code' => 'Wrong credentials.',
            ])->withInput($request->only('email'));
        }
    })->name('login_verify_pin_post')->middleware('auth');

    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
