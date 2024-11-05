<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SecurityVerified
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        // If the user is logged in but has not verified their security code
        if ($user && !$user->security_verified) {
            return redirect()->route('login_verify_pin');
        }

        return $next($request);
    }
}

