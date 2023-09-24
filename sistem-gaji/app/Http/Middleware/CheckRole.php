<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if ($request->user()) {
            // Periksa peran pengguna saat ini dengan peran yang diizinkan
            if (in_array($request->user()->role, $roles)) {
                return $next($request);
            }
        }

        // Jika peran tidak sesuai, alihkan pengguna ke halaman lain
        return redirect('/');
    }
}
