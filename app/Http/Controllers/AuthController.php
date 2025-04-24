<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Cari admin berdasarkan email
        $admin = Admin::where('email', $request->email)->first();
    
        // Jika admin ditemukan dan password cocok
        if ($admin && Hash::check($request->password, $admin->password)) {
            // Gunakan guard 'admin' untuk login
            Auth::guard('admin')->login($admin);
    
            // Redirect ke dashboard admin
            return redirect('/admin/dashboard');
        }
    
        // Jika login gagal, tampilkan pesan error
        return redirect()->back()->with('error', 'Email atau password salah!');
    }

    

    public function logout()
    {
        // Logout dari guard 'admin'
        Auth::guard('admin')->logout();
    
        // Redirect ke halaman login
        return redirect('/login');
    }
    

}
