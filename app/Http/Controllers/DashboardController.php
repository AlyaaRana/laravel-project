<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    { 
        return view('dashboard.all', [
            "title" => "dashboard",
        ]);
    }

    public function student()
    { 
        return view('dashboard.student', [
            "title" => "student",
            "students" => Student::all()
        ]);
    }

    public function kelas()
    { 
        return view('dashboard.kelas', [
            "title" => "kelas",
            "kelas" => Kelas::all()
        ]);
    }
}
