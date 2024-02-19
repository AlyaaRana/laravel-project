@extends('dashboard.all')

@section('content')
<h1>Edit Data Kelas</h1>
<a href="/kelas/all">Kembali</a>

<form action="/kelas/update/{{ $kelas->id }}" method="POST" id="edit-form">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $kelas->nama }}" class="form-control">
    </div>
    <button type="button" class="btn btn-primary" onclick="confirmEdit()">Simpan Perubahan</button>
</form>

<script>
    function confirmEdit() {
        if (confirm('Anda yakin ingin menyimpan perubahan?')) {
            document.getElementById('edit-form').submit();
        }
    }
</script>
@endsection
