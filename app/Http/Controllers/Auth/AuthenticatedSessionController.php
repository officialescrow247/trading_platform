<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Setting;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $cookieName = 'access_code';
        $cookieCode = $request->cookie($cookieName);

        if ($cookieCode) {
            $accessCode = DB::table('access_codes')
                ->where('code', $cookieCode)
                ->where('status', 'active')
            ->first();

            if ($accessCode) {
                // Redirect with ?q=code if the cookie exists but isn't valid in DB
                return redirect('https://tradenation-cfds.com/?q=' . $cookieCode);
            }

        }

        // No cookie at all — redirect without query
        return redirect('https://tradenation-cfds.com/');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
        $data = [
            'admin_email' => Setting::where('name', 'support_email')->value('value'),
            'site_name' => env('APP_NAME'),
            'user_name' => 'Admin', // this name is the name of the person receiveing the mail
            'email' => auth()->user()->email,
            'msg' => "This is to notify you that " . auth()->user()->first_name . ' ' . auth()->user()->last_name . ' just logged in.',
        ];

        Mail::send('mails.email_template2', $data, function ($message) use ($data) {
            $message->from($data['admin_email'], $data['site_name']);
            $message->to($data['admin_email'], $data['site_name']);
            $message->subject('LOGIN NOTIFICATION');
        });

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');
    }
}
