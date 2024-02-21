@extends('layouts.main')

@section('container')
    <!DOCTYPE html>
    <html>
    <body>
        <h1>Konfirmasi Penghapusan</h1>
        <p>Anda yakin ingin menghapus data siswa ini?</p>
        <button onclick="hapus()">Ya</button>
        <button onclick="batal()">Tidak</button>

        <script>
            function hapus() {
                var confirmed = confirm('Anda yakin ingin menghapus data ini?');

                if (confirmed) {
                    window.location.href = '/dashboard/students/delete/{{$student->id}}';
                }
            }

            function batal() {
                window.location.href = '/dashboard/student';
            }
        </script>
    </body>
    </html>
@endsection
