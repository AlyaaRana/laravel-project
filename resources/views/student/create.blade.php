@extends('layouts.main')

@section('container')
    <h1>Add Student</h1>
    <form action="/students/add" method="post">
        @csrf
        <div class="form-group">
            <label for="jenis">NIS:</label>
            <input type="text" name="nis" id="nis" value="{{ isset($student) ? $student->nis : '' }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="{{ isset($student) ? $student->nama : '' }}" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="jenis">Kelas:</label>
            <input type="text" name="kelas" id="kelas" value="{{ isset($student) ? $student->kelas : '' }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="jenis">Tanggal Lahir:</label>
            <input type="date" name="tanggal" id="tanggal_lahir" value="{{ isset($student) ? $student->tanggal_lahir : '' }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="jenis">Alamat:</label>
            <input type="text" name="alamat" id="kelas" value="{{ isset($student) ? $student->alamat : '' }}" class="form-control">
        </div>
    

        <button type="submit" class="btn btn-primary" onclick="confirmAdd()">Add Student</button>
    </form>
    <script>
        function confirmAdd() {
            if (confirm('Anda yakin ingin menambah data?')) {
                document.forms[0].submit();
            }
        }
    </script>    
@endsection
