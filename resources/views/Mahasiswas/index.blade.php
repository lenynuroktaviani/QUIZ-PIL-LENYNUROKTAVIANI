@extends('layouts.app')

@section('title', 'ABSENSI MAHASISWA')
@section('content')
<a href="/mahasiswas/create" type="button" class="btn btn-primary mb-5 btn-sm">TAMBAH MAHASISWA</a>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">NAMA MAHASISWA</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">NO TELEPON</th>
      <th scope="col">EMAIL</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($mahasiswas as $mahasiswa)
    <tr>
    <td>{{$mahasiswa->nama_mahasiswa}}</td>
    <td>{!!$mahasiswa->alamat !!}</td>
    <td>{!!$mahasiswa->no_tlp !!}</td>
    <td>{!!$mahasiswa->email !!}</td>
 
    <a id="tombolUbah" data-toggle="modal" data-target="#UbahModal"></a>
    <!-- Modal Ubah data Mahasiswa --> 
    
    <form action="/mahasiswas/{{$mahasiswa->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    {{ $mahasiswas -> links() }}
    </div>
@endsection

