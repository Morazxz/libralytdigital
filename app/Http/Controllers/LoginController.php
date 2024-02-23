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
    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
}
