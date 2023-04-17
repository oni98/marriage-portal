<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class RedirectMobile
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
        $agent = new Agent();

        if ($agent->isMobile()) {
            $url = $request->url();
            $url = str_replace('http://', 'https://', $url);
            $url = str_replace('www.', '', $url);
            $mobileUrl = 'https://m.biyemedia.com'.substr($url, strpos($url, '/', 8));
            return redirect()->away($mobileUrl);
        }

        return $next($request);
    }
}
