<?php

namespace App\Http\Middleware;

use Closure;

class Notyet
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
      if (2 == 3) {
        return $next($request);
      }
    }
}
