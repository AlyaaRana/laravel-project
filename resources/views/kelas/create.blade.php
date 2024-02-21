@extends('dashboard.all')

@section('content')
    <h1>Add Student</h1>
    <form action="/kelas/store" method="post">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="{{ $kelas->nama}}" class="form-control"> 
        </div>
        <button type="submit" class="btn btn-primary" onclick="confirmAdd()">Add Kelas</button>
    </form>
    <script>
        function confirmAdd() {
            if (confirm('Anda yakin ingin menambah data?')) {
                document.forms[0].submit();
            }
        }
    </script>      
@endsection
