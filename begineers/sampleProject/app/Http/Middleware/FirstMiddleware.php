<?php

namespace App\Http\Middleware;

use Closure;

class FirstMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        echo " FirstMiddleware<br>";
        return $next($request);
    }
}
