<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:2'],
            'password_confirmation' => ['required', 'same:password']
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Your registration is now complete! Please login.');
    }
}
