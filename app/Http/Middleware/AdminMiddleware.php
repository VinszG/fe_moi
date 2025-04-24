<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Memeriksa apakah session 'admin' ada, yang menandakan admin sudah login
        if (!Session::has('admin')) {
            // Jika tidak ada session admin, arahkan ke halaman login
            return redirect('login')->with('error', 'Anda harus login sebagai admin terlebih dahulu.');
        }

        // Jika sudah login sebagai admin, lanjutkan permintaan
        return $next($request);
    }
}
