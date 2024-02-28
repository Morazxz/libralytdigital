<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\FlareClient\View;

class RegisterController extends Controller
{
    //

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'alamat' => 'required',
        ]);
        if($validate){
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'alamat' => $request->alamat
            ]);
            return redirect('/login');
        }
    }
    Public function create(){
        return view('auth.register');
    }
}
