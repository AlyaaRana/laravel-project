@extends('dashboard.all')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="d-flex justify-content-between align-items-center mt-5">
  <h4 class="mt-4">Student</h4>
  <div class="mb-3">
    <label for="kelas" class="form-label">Filter by Class:</label>
    <select class="form-select" id="kelas_id" onchange="filterByClass(this.value)">
      <option value="">All Kelas</option>
      @foreach ($kelas as $kelasItem)
        <option value="{{ $kelasItem->id }}">
          {{ $kelasItem->nama }}
        </option>
      @endforeach
    </select>
  </div>
</div>
<a href="/students/create" class="btn btn-success mb-3">Add Student</a> 
<table class="table">
  <thead class="table-light">
    <tr>
      <td>Nis</td>
      <td>Nama</td>
      <td>Kelas</td>
      <td>Action</td>
    </tr>
  </thead>
  <tbody class="table-group-divider" id="students-table-body" >
    @foreach ($students as $key => $student)
    <tr data-kelas="{{ $student->kelas_id }}">
      <td>{{ $student->nis}}</td>
      <td>{{ $student->nama }}</td>
      <td>{{ $student->kelas->nama}}</td>
      <td>
        {{-- <a type="button" class="btn btn-warning" href="/students/edit/{{$student->id}}" >Edit</a> --}}
        <a href="/students/{{ $student->id }}/edit" class="btn btn-warning" role="button">Edit</a>
        <form action="/students/delete/{{$student->id}}" method="post" class="d-inline">
          @csrf
          @method('delete')
          <button class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</button>
        </form>      
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
  {{ $students->links('pagination::bootstrap-5') }}
</div>

<script>
  function filterByClass(classId) {
    var rows = document.querySelectorAll("#students-table-body tr");

    rows.forEach(function(row) {
      var kelasId = row.getAttribute("data-kelas");

      if (!classId || classId == kelasId) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    });
  }
</script>

@endsection