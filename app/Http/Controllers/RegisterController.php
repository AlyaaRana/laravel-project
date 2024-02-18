<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    { 
        return view('register.index', [
            "title" => "register",
        ]);
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:8',
        ]);

        $validatedData ["password"] = Hash::make($validatedData["password"]);

        User::create($validatedData);
        session()->flash('success', 'Registrasi berhasil! Silahkan login.');

        return redirect('/login/index');
    }
}
