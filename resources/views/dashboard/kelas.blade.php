@extends('dashboard.all')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif
<h4 class="mt-4">Kelas</h4>
<a href="/kelas/create" class="btn btn-success mb-3">Add Kelas</a>
<table class="table">
  <thead class="table-light">
    <tr>
      <td>No</td>
      <td>Nama</td>
      <td>Action</td>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($kelas as $key => $kelas)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $kelas->nama }}</td>
      <td>
        <a type="button" class="btn btn-warning" href="/kelas/edit/{{$kelas->id}}" >Edit</a>
        <form action="/kelas/delete/{{$kelas->id}}" method="post" class="d-inline">
          @csrf
          @method('delete')
          <button class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection