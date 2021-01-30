@extends('layouts.app')

@section('title', 'ABSENSI MAHASISWA')

@section('content')

<form action="/mahasiswas/{{ $mahasiswa['id'] }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">NAMA MAHASISWA</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_mahasiswa" aria-describedby="emailHelp" value="{{ old('nama_mahasiswa') ? old('nama_mahasiswa') : $mahasiswa['nama_mahasiswa'] }}">
    @error('nama_mahasiswa')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">ALAMAT</label>
    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{ old('alamat') ? old('alamat') : $mahasiswa['alamat'] }}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">NO TELEPON</label>
    <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1" value="{{ old('no_tlp') ? old('no_tlp') : $mahasiswa['no_tlp'] }}" >
    @error('no_tlp')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">EMAIL</label>
    <input type="text" class="form-control" name="email" id="exampleInputPassword1" value="{{ old('email') ? old('email') : $mahasiswa['email'] }}" >
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection