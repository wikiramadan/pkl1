<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user sudah login
        if (!Auth::check()) {
            // Jika belum login, arahkan ke login
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }
    
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        }
    
        return $next($request);
    }
}