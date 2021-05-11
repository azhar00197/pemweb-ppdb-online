<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (strtoupper($role) === 'ADMIN') {
            if (auth()->user()->role !== 'ADMIN') {
                auth()->logout();
                return redirect("/admin/login");
            }
        } else {
            if (auth()->user()->role === 'ADMIN') {
                auth()->logout();
                return redirect("/login");
            }
        }
        return $next($request);
    }
}
