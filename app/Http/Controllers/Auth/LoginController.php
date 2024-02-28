<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user)
{
    if ($user->role == 'admin') {
        return redirect()->route('admin.beranda');
    } elseif ($user->role == 'petugas') {
        return redirect()->route('petugas.beranda');
    } elseif ($user->role == 'peminjam') {
        return redirect()->route('peminjam.beranda');
    } else {
        Auth::user()->logout();
        flash('Anda tidak memiliki hak role')->error();
        return redirect()->route('login');
    }
}

}
