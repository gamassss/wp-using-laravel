<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            if(Auth::user()->type == 'admin') {
                return redirect()->intended('/dashboard');
            } else if(Auth::user()->type == 'doctor') {
                return redirect()->intended('doctor/dashboard');
            } else if(Auth::user()->type == 'staff') {
                return redirect()->intended('staff/dashboard');
            }
        }

        return back()->with('loginError', 'Login is failed!')->withInput();
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
