<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index(){
        // if(Auth::check()) return redirect()->route('');

        return view ('login.index', ["title" => "Login"]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
           "email" => "required|email",
           "password" => "required",
        ]);

        if (Auth::attempt($validateData)) {
        session()->flash('success', 'Login Berhasil');
        return redirect('/students/all');
        } else {
        throw ValidationException::withMessages([
            'email' => ['Invalid email or password'],
        ]);
    }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/students/all')->with('success', 'Anda berhasil logout');
    }

}
