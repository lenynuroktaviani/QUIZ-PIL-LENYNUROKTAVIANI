@extends('layouts.app')

@section('title', 'ABSENSI MAHASISWA')
@section('content')
<a href="/matakuliahs/create" type="button" class="btn btn-primary mb-2 btn-sm">TAMBAH MATA KULIAH</a>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">NAMA MATA KULIAH</th>
      <th scope="col">SKS</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($matakuliahs as $matakuliah)
    <tr>
    <td>{{$matakuliah->nama_matakuliah}}</td>
    <td>{!!$matakuliah->sks !!}</td>

    <td><a href="/matakuliahs/{{$matakuliah->id}}/edit"><button type="button" class="btn btn-outline-primary">Edit</a></button></td>
    <form action="/matakuliahs/{{$matakuliah->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-primary">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    {{ $matakuliahs -> links() }}
    </div>
@endsection
