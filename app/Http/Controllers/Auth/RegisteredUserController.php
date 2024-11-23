<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\SecurityPin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return redirect('login');
        $countries = Country::all();
        return view('auth.register', [
            'countries' => $countries->sortBy('name', SORT_ASC),
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
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
            'approved' => false,

            'city' => $request->city,
            'address' => $request->address,
            'dob' => $request->dob, // y/m/d

            'pass' => $request->password,
            'currency' => $request->currency,
        ]);

        $user->attachRole('user');
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function send_verification_code(Request $request)
    {
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
    
            if($user){

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
        }
    
        // If login fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }
}
