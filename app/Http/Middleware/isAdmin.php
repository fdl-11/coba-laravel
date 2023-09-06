<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // kalau belum login atau yg login bukan admin (fadli d), kasih pesan forbidden (403)
        if(auth()->guest() || !auth()->user()->is_admin) {
            abort(403);
        }
        return $next($request);
    }
}
