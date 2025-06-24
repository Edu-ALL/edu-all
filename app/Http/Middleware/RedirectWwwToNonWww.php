<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectWwwToNonWww
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
        if (str_starts_with($request->getHost(), 'www.')) {
            $nonWwwHost = str_replace('www.', '', $request->getHost());
            $url = $request->getScheme() . '://' . $nonWwwHost . $request->getRequestUri();

            return redirect($url, 301); // Permanent redirect
        }

        return $next($request);
    }
}
