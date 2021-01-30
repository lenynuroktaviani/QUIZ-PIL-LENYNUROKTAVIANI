@extends('layouts.app')

@section('title', 'ABSENSI MAHASISWA')
@section('content')
<a href="/absens/create" type="button" class="btn btn-primary mb-5 btn-sm">Tambah Absensi</a>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">WAKTU ABSENSI</th>
      <th scope="col">ID Mahasiswa</th>
      <th scope="col">ID Mata Kuliah</th>
      <th scope="col">KETERANGAN</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($absens as $absen)
    <tr>
    <td>{{$absen->waktu_absen}}</td>
    <td>{!!$absen->mahasiswa_id !!}</td>
    <td>{!!$absen->matakuliah_id !!}</td>
    <td>{!!$absen->keterangan !!}</td>
 
    <td><a href="/absens/{{$absen->id}}/edit"><button type="button" class="btn btn-outline-primary">Edit</a></button></td>
    <form action="/absens/{{$absen->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-primary">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    {{ $absens -> links() }}
    </div>
@endsection

