@extends('layouts.main')

@section('container')
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif
<h1>Ini adalah halaman student</h1>
{{-- <a href="/students/create" class="btn btn-success">Add Student</a> --}}
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
        {{-- <a type="button" class="btn btn-warning" href="/students/edit/{{$student->id}}" >Edit</a>
        <form action="/students/delete/{{$student->id}}" method="post" class="d-inline">
          @csrf
          @method('delete')
          <button class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</button>
        </form> --}}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
