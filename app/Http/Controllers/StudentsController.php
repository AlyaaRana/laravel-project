<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
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
        
        $kelas = Kelas::all();

        return view('student.edit',[
            "title" => "edit-student",
            "student" => Student::find($student),
            'kelas' => $kelas,
        ]);
    }


    public function update(Request $request, $student)
    {
        $student = Student::find($student);

        if ($student) {
        $student->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas_id' => $request->kelas_id,
            'alamat' => $request->alamat,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('/students/all')->with('success', 'Data produk berhasil diperbarui.');
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
            'kelas' => Kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas_id' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required',
        ]);

        // $result = Student::create($validatedData);
    
        $student = new Student(); 
        $student->nis = $validatedData['nis'];
        $student->nama = $validatedData['nama'];
        $student->kelas_id = $validatedData['kelas_id'];
        $student->tanggal_lahir = $validatedData['tanggal'];
        $student->alamat = $validatedData['alamat'];
    
        $student->save();
        return redirect('/students/all')->with('success', 'Data siswa berhasil ditambahkan.');
        // if ($result) {
        //     return redirect('/students/all')->with('success', 'Data siswa berhasil ditambahkan.');
        // }
    }
}
