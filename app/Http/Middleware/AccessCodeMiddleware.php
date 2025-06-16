<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class AccessCodeMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $cookieName = 'access_code';
        $paramCode = $request->query('q'); // Get ?q=code

        // 1. If code is in the URL
        if ($paramCode) {
            $accessCode = DB::table('access_codes')
                ->where('code', $paramCode)
                ->whereIn('status', ['active', 'used'])
            ->first();

            if ($accessCode) {
                // Cookie::queue(Cookie::make($cookieName, $paramCode, 60 * 24 * 14)); // 14 days
                // Cookie::queue(Cookie::make($cookieName, $paramCode, 60 * 24 * 365 * 10)); // 10 years
                Cookie::queue(
                    Cookie::make(
                        $cookieName,
                        $paramCode,
                        60 * 24 * 365 * 10, // 10 years
                        '/',                // path
                        null,               // domain (null = current domain)
                        false,              // secure (true = HTTPS only)
                        true                // httpOnly
                    )
                );

                // Mark as used if active
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

        if ($cookieCode) {
            $accessCode = DB::table('access_codes')
                ->where('code', $cookieCode)
                ->whereIn('status', ['active', 'used'])
            ->first();

            if ($accessCode) {
                return $next($request);
            }
        }

        // 3. Deny access silently with blank page
        return response(" ");
    }
}
