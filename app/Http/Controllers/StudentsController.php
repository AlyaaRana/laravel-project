<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function index()
    { 
        return view('student.all', [
            "title" => "student",
            "students" => Student::all()
        ]);
    }

    public function show($student)
    {
        return view('student.detail',[
            "title" => "detail-student",
            "student" => Student::find($student)
        ]);
    }

    public function edit($student)
    {
        return view('student.edit',[
            "title" => "edit-student",
            "student" => Student::find($student)
        ]);
    }

    public function update(Request $request, $student)
    {
        $student = Student::find($student);

        if ($student) {
        $student->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('/students/all')->with('success', 'Data produk berhasil diperbarui.');
    } else {
        return redirect('/students/all')->with('error', 'Produk tidak ditemukan.');
    }
    }
    
    
    
    public function destroy($student)
    {
        $student = Student::find($student);
        if ($student) {
        $student->delete();
        return redirect('/students/all')->with('success', 'Data siswa berhasil dihapus.');
        } else {
        return redirect('/students/all')->with('error', 'Siswa tidak ditemukan.');
        }
    }

    public function create()
    {
        return view('student.create', [
            'title' => 'Add Student',
            'student' => new Student(), 
        ]);
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required',
        ]);
    
        $student = new Student(); 
        $student->nis = $validatedData['nis'];
        $student->nama = $validatedData['nama'];
        $student->kelas = $validatedData['kelas'];
        $student->tanggal_lahir = $validatedData['tanggal'];
        $student->alamat = $validatedData['alamat'];
    
        $student->save();
    
        return redirect('/students/all')->with('success', 'Student added successfully');
    }
}
