@extends('layouts.main')

@section('container')
    <h1>Add Student</h1>
    <form action="/students/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="jenis">NIS:</label>
            <input type="text" name="nis" id="nis" required value="{{ old('nis') }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required value="{{ old('nama') }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="jenis">Kelas:</label>
            {{-- <input type="text" name="kelas" id="kelas" value="{{ $student->kelas}}" class="form-control">  --}}
            <select class="form-select" name="kelas_id" id="">
                @foreach ($kelas as $kelasItem)
                    <option nama="kelas_id" value={{ $kelasItem->id }}>{{ $kelasItem->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jenis">Tanggal Lahir:</label>
            {{-- <input type="date" name="tanggal" id="tanggal_lahir" required value="{{ old('tanggal')}}" class="form-control"> --}}
            <input type="date" name="tanggal" id="tanggal_lahir" required
                value="{{ old('tanggal_lahir') }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="jenis">Alamat:</label>
            <input type="text" name="alamat" id="kelas" required value="{{ old('alamat') }}" class="form-control">
        </div>
        <a href="/dashboard/student" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-primary" >Add Student</button>
    </form>
    <script>
        function confirmAdd() {
            if (confirm('Anda yakin ingin menambah data?')) {
                document.forms[0].submit();
            }
        }
    </script>
@endsection
