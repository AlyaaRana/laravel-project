@extends('layouts.main')

@section('container')
<h1>Ini adalah halaman student</h1>
<a href="/students/create" class="btn btn-success">Add Student</a>
<table class="table">
  <thead>
    <tr>
      <td>No</td>
      <td>Nis</td>
      <td>Nama</td>
      <td>Kelas</td>
      <td>Action</td>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($students as $key => $student)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $student->nis}}</td>
      <td>{{ $student->nama }}</td>
      <td>{{ $student->kelas }}</td>
      <td>
        <a type="button" class="btn btn-primary" href="/students/detail/{{$student->id}}">Detail</a>
        <a type="button" class="btn btn-warning" href="/students/edit/{{$student->id}}" >Edit</a>
        <a type="button" class="btn btn-danger" href="javascript:void(0);" onclick="konfirmasiHapus({{ $student->id }})">Delete</a>
        <script>
          function konfirmasiHapus(studentId) {
              if (confirm('Anda yakin ingin menghapus data siswa ini?')) {
                  window.location.href = '/students/delete/' + studentId;
              }
          }
        </script>
      </td>
    
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
