<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index(){

        return view ('login.index', ["title" => "Login"]);
    }

    public function store(Request $request)
    {
        // $validateData = $request->validate([
        //    "email" => "required|email",
        //    "password" => "required",
        // ]);

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/students/all');
        }

        return back()->with('loginError', 'Login Failed!');
    
    }

    public function logout(Request $request)
    {
        auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login/index')->with('success', 'Anda berhasil logout');
    }

}
