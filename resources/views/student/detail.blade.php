@extends('layouts.main')

@section('container')
<a href="/students/all">back</a>

<table class="table">
    <tr>
        <th>NO</th>
        <td>{{ $student->id }}</td>
    </tr>
    <tr>
        <th>NIS</th>
        <td>{{ $student->nis }}</td>
    </tr>
    <tr>
        <th>NAMA</th>
        <td>{{ $student->nama }}</td>
    </tr>
    <tr>
        <th>KELAS</th>
        <td>{{ $student->kelas->nama }}</td>
    </tr>
    <tr>
        <th>TANGGAL LAHIR</th>
        <td>{{ $student->tanggal_lahir }}</td>
    </tr>
    <tr>
        <th>ALAMAT</th>
        <td>{{ $student->alamat}}</td>
    </tr>
</table>


@endsection