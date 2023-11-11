<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class CheckForUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $expiresAt = now()->addSeconds(5);
            // Cache::put('user-is-online-' . Auth::id(), true, $expiresAt);
            Cache::put('user-is-online-' . Auth::id(), true);

            // Cache::forget('user-is-online-' . Auth::id());

            User::where('id', Auth::id())->update(['last_seen' => now()]);
        }

        return $next($request);
    }
}
