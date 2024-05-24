<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email harus berupa email',
            'password.required' => 'Password harus diisi',
        ]);

        if (Auth::guard('pelanggan')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('status', 'Email atau password salah');
    }
}
