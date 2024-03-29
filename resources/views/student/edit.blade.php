@extends('dashboard.all')

@section('content')
    <h1>Edit Data Siswa</h1>
    <a href="/dashboard/student">Kembali</a>

    <form action="{{ route('students.update', $student) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nis">NIS:</label>
            <input type="text" name="nis" id="nis" value="{{ $student->nis }}" class="form-control" readonly>
        </div>

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="{{ $student->nama }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <select class="form-select" name="kelas_id" id="">
                @foreach($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ $student->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                        {{ $kelasItem->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" value="{{ $student->alamat }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal Lahir:</label>
            <input type="date" name="tanggal" id="tanggal" value="{{ $student->tanggal_lahir }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>

    <script>
        function confirmEdit() {
            if (confirm('Anda yakin ingin menyimpan perubahan?')) {
                document.getElementById('edit-form').submit();
            }
        }
    </script>
@endsection
