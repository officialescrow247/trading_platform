<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AccessCodeMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $cookieName = 'access_code';
        $paramCode = $request->query('q');

        // 1. If code is in the URL
        if ($paramCode) {
            $accessCode = DB::table('access_codes')
                ->where('code', $paramCode)
                ->whereIn('status', ['active', 'used'])
            ->first();

            if ($accessCode) {
                // Try to set cookie (may fail in incognito)
                Cookie::queue(
                    Cookie::make(
                        $cookieName,
                        $paramCode,
                        60 * 24, // 1 day
                        '/',
                        null,
                        false,
                        false
                    )
                );

                // Set session as fallback
                Session::put($cookieName, $paramCode);

                if ($accessCode->status === 'active') {
                    DB::table('access_codes')
                        ->where('id', $accessCode->id)
                    ->update(['status' => 'used']);
                }

                return $next($request);
            }
        }

        // 2. Check for cookie
        $cookieCode = $request->cookie($cookieName);

        // 2b. Check for session fallback
        $sessionCode = Session::get($cookieName);

        $codeToCheck = $cookieCode ?: $sessionCode;

        if ($codeToCheck) {
            $accessCode = DB::table('access_codes')
                ->where('code', $codeToCheck)
                ->whereIn('status', ['active', 'used'])
            ->first();

            if ($accessCode || $codeToCheck) {
                return $next($request);
            }
        }

        // 3. Deny access silently with blank page
        return response(" ");
    }
}
