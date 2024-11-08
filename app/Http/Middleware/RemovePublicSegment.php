<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class RemovePublicSegment
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

        // Get the current path
        $parsed_url = parse_url(URL::current());
        // Extract the path from the parsed URL
        if (isset($parsed_url['path'])) {
            $path = $parsed_url['path']; // '/id-en/programs/admissions-mentoring'

            // Split the path into segments
            $segments = explode('/', trim($path, '/'));

            // Remove 'main', 'public', and 'index.php' segments if they exist
            $path_segments = array_filter($segments, function ($segment) {
                return !in_array($segment, ['main', 'public', 'index.php']);
            });

            // Rebuild the path without 'public'
            $new_path = '/' . implode('/', $path_segments);

            // Rebuild the full URL (if needed)
            $new_url = $parsed_url['scheme'] . '://' . $parsed_url['host'] . $new_path;

            // Check if the path starts with 'public' and remove it
            if (isset($segments[0]) && in_array($segments[0], ['main', 'public', 'index.php'])) {
                return redirect($new_url);
            }
        }

        // Proceed with the request
        return $next($request);
    }
}
