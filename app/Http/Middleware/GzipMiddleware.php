<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class GzipMiddleware
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
        $response = $next($request);

        if (strpos($response->headers->get('Content-Type'), 'text/') !== false ||
            strpos($response->headers->get('Content-Type'), 'application/json') !== false ||
            strpos($response->headers->get('Content-Type'), 'application/javascript') !== false) {

            $response->setContent(gzencode($response->getContent(), 9));
            $response->headers->set('Content-Encoding', 'gzip');
            $response->headers->set('Content-Length', strlen($response->getContent()));
        }

        return $response;
    }
}
