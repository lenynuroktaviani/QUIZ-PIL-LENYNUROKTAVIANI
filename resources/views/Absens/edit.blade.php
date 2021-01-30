@extends('layouts.app')

@section('title', 'ABSENSI MAHASISWA')

@section('content')

<form action="/absens/{{ $kategori['id'] }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">WAKTU ABSEN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="waktu_absen" aria-describedby="emailHelp" value="{{ old('waktu_absen') ? old('waktu_absen') : $kategori['waktu_absen'] }}">
    @error('waktu_absen')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Id Mahasiswa</label>
    <input type="text" class="form-control" name="mahasiswa_id" id="exampleInputPassword1" value="{{ old('mahasiswa_id') ? old('mahasiswa_id') : $kategori['mahasiswa_id'] }}" >
    @error('mahasiswa_id')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Id Matakuliah</label>
    <input type="text" class="form-control" name="matakuliah_id" id="exampleInputPassword1" value="{{ old('matakuliah_id') ? old('matakuliah_id') : $kategori['matakuliah_id'] }}" >
    @error('matakuliah_id')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">KETERANGAN</label>
    <input type="text" class="form-control" name="keterangan" id="exampleInputPassword1" value="{{ old('keterangan') ? old('keterangan') : $kategori['keterangan'] }}" >
    @error('keterangan')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection