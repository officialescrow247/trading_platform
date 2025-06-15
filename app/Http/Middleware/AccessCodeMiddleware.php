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
                ->where('status', 'active')
                ->first();

            if ($accessCode) {
                // Store for 14 days (2 weeks)
                Cookie::queue(Cookie::make($cookieName, $paramCode, 60 * 24 * 14));

                // Mark as used if active
                if ($accessCode->status === 'active') {
                    DB::table('access_codes')
                        ->where('id', $accessCode->id)
                        ->update(['status' => 'used']);
                }

                return $next($request);
            } else {
                return response(" "); // blank page
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
