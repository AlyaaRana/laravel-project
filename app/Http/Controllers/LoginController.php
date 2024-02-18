<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    { 
        return view('login.index', [
            "title" => "login",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($validatedData)) {
            return back()->with('error', 'Invalid credentials');
        }

        return redirect('/students/all');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/login/index');
    }
}
