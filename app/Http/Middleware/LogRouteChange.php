<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LogRouteChange
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
        $method = $request->method();
        $uri = $request->getRequestUri();
        $ip = $request->ip();
        $userId = Auth::check() ? Auth::guard('web-admin')->user()->email : null;

        // Catat ke log
        Log::notice('Route accessed : '. $uri , [
            'method' => $method,
            'uri' => $uri,
            'ip' => $ip,
            'email' => $userId
        ]);

        return $next($request);
    }
}
