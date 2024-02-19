@extends('dashboard.all')

@section('content')
    <h1>Add Student</h1>
    <form action="/students/store" method="post">
        @csrf
        <div class="form-group">
            <label for="jenis">NIS:</label>
            <input type="text" name="nis" id="nis" value="{{ $student->nis}}" class="form-control" >
        </div>

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="{{ $student->nama}}" class="form-control"> 
        </div>
    
        <div class="form-group">
            <label for="jenis">Kelas:</label>
            {{-- <input type="text" name="kelas" id="kelas" value="{{ $student->kelas}}" class="form-control">  --}}
            <select class="form-select" name="kelas_id" id="">
                @foreach($kelas as $kelasItem)
                    <option nama="kelas_id" value={{$kelasItem->id}}>{{ $kelasItem-> nama}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jenis">Tanggal Lahir:</label>
            {{-- <input type="date" name="tanggal" id="tanggal_lahir" required value="{{ old('tanggal')}}" class="form-control"> --}}
            <input type="date" name="tanggal" id="tanggal_lahir" value="{{ $student->tanggal_lahir}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="jenis">Alamat:</label>
            <input type="text" name="alamat" id="kelas" requiredvalue="{{ old('alamat')}}" class="form-control">
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
