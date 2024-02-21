<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Student;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    { 
        return view('dashboard.all', [
            "title" => "dashboard",
        ]);
    }

    public function student()
    { 
        $kelas = Kelas::all();
        $students = Student::with('kelas')->paginate(5);
        return view('dashboard.student', [
            "title" => "student",
            "students" => $students,
            'kelas' => $kelas,
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
