@extends('layouts.main')

@section('container')

<h1>Tentang saya</h1>
<table>
  <tr>
    <td style="border: 1px solid #000; padding: 10px;">Nama:</td>
    <td style="border: 1px solid #000; padding: 10px;">{{ $nama }}</td>
  </tr>
  <tr>
    <td style="border: 1px solid #000; padding: 10px;">Kelas:</td>
    <td style="border: 1px solid #000; padding: 10px;">{{ $kelas }}</td>
  </tr>
  <tr>
    <td style="border: 1px solid #000; padding: 10px;">foto:</td>
    <td style="border: 1px solid #000; padding: 10px;"><img src="{{ $foto }}" width="80"></td>
  </tr>
</table>




@endsection