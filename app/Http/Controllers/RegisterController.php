<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function index(){
        if(Auth::check()) return redirect()->route('dashboard.all');

        return view ('register.index', ["title" => "Register"]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            "name" => "required|max:255",
            "email" => "required|email|unique:users,email,NULL,id",
            "password" => "required",
        ]);
        
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        session()->flash('success', 'Register Berhasil');
        return redirect('/login/index');
    }
}
