<?php

namespace App\Http\Middleware;

use Closure;

class TerminalMiddleware
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
        echo "Executing statements of handle method of TerminalMiddleware";
        return $next($request);
    }

    public function terminate($request,$response)
    {
      echo "<br>Executing statements of terminate method of this middleware";
    }

}
