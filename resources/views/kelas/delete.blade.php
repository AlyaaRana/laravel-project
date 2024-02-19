@extends('dashboard.all')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <!-- Elemen head lainnya -->
</head>
<body>
    <h1>Konfirmasi Penghapusan</h1>
    <p>Anda yakin ingin menghapus data kelas ini?</p>
    <button onclick="hapus()">Ya</button>
    <button onclick="batal()">Tidak</button>

    <script>
        function hapus() {
            window.location.href = '/kelas/delete{{$kelas->id}}';
        }

        function batal() {
            window.location.href = '/kelas/all';
        }
    </script>
</body>
</html>
@endsection