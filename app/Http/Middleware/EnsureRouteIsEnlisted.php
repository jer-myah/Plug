<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Traits\EnlistedRoute;

class EnsureRouteIsEnlisted
{
    use EnlistedRoute;

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (in_array($request->path(), $this->enlistedRoute())) {
            return $next($request);
        }
    }
}
