<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('admin', $admin);
            return redirect('/admin/dashboard');
        }

        return redirect()->back()->with('error', 'Email atau password salah!');
    }

    public function logout()
    {
        Session::forget('admin');
        return redirect('/login');
    }
}
