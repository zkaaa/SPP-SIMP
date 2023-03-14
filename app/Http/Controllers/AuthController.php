<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Login';
        return view('auth.login', compact('title'));
    }

    public function authenticated(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        
        if (Auth::guard('petugas')->attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/dashboard');
        }
        
        return redirect('/login')->with('Login error', 'login failed');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
