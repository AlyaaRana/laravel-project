<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    { 
        return view('kelas.all', [
            "title" => "kelas",
            "kelas" => Kelas::all()
        ]);
    }

    public function edit($kelas)
    {
        return view('kelas.edit',[
            "title" => "edit-kelas",
            "kelas" => Kelas::find($kelas)
        ]);
    }

    public function update(Request $request, $kelas)
    {
        $kelas = Kelas::find($kelas);

        if ($kelas) {
        $kelas->update([
            'nama' => $request->nama,
        ]);

        return redirect('/kelas/all')->with('success', 'Data kelas berhasil diperbarui.');
        }
    }

    public function destroy($kelas)
    {
        $kelas = Kelas::find($kelas);
        if ($kelas) {
        $kelas->delete();
        return redirect('/kelas/all')->with('success', 'Data kelas berhasil dihapus.');
        } else {
        return redirect('/kelas/all')->with('error', 'Kelas tidak ditemukan.');
        }
    }

    public function create()
    {
        return view('kelas.create', [
            'title' => 'Add Kelas',
            'kelas' => new Kelas(), 
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
        ]);

        // $result = Student::create($validatedData);
    
        $kelas = new Kelas(); 
        $kelas->nama = $validatedData['nama'];
    
        $kelas->save();
        return redirect('/kelas/all')->with('success', 'Data kelas berhasil ditambahkan.');
        // if ($result) {
        //     return redirect('/students/all')->with('success', 'Data siswa berhasil ditambahkan.');
        // }
    }
}
