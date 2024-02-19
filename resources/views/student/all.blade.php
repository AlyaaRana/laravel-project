@extends('layouts.main')

@section('container')
@endif
<h1>Ini adalah halaman student</h1>
<table class="table">
  <thead class="table-light">
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
      <td>{{ $student->kelas->nama}}</td>
      <td>
        <a type="button" class="btn btn-primary" href="/students/detail/{{$student->id}}">Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
