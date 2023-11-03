<?php

namespace Lamo\Stubs\Middleware;

use Closure;
use Illuminate\Http\Request;

class Demo
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {

        return $next($request);
    }
}
