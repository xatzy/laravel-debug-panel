<?php

namespace App\Http\Middleware;

use Closure;

class Debugger
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
        if (env('APP_DEBUG') == true)
        {
            \View::share('all_request_data', $request->all());
        }

        return $next($request);
    }
}
