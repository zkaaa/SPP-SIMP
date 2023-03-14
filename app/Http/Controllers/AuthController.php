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
            'email' => ['required'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->hasRole('admin')) {
                return redirect()->intended('/dashboard');
            }elseif (Auth::user()->hasRole('petugas')) {
                return redirect()->intended('/dashboard');
            }elseif (Auth::user()->hasRole('siswa')) {
                return redirect()->intended('/home');
            }
        }else {
            return back()->with('Login error', 'login failed');
        }
        
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
