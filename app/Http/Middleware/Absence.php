<?php

namespace App\Http\Middleware;

use Closure;

class Absence
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->hasAccess()) {
            return $next($request);
        }

        throw new HttpException(404);
    }
}
