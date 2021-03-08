<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ScopeAmbassadorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user()->tokenCan('ambassador')) {
            abort(401, 'unauthorized');
        }

        return $next($request);
    }
}
