@extends('layouts.app')
@section('title', 'ABSENSI MAHASISWA')
@section('content')
<form action="/absens" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">WAKTU ABSEN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="waktu_absen" aria-describedby="emailHelp" value="{{ old('waktu_absen') }}">
    @error('waktu_absen')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
 </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Id Mahasiswa</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="mahasiswa_id" aria-describedby="emailHelp" value="{{ old('mahasiswa_id') }}">
    @error('mahasiswa_id')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
 </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Id Matakuliah</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="matakuliah_id" aria-describedby="emailHelp" value="{{ old('matakuliah_id') }}">
    @error('matakuliah_id')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
 </div>
 <div class="form-group">
    <label for="exampleInputEmail1">KETERANGAN</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="keterangan" aria-describedby="emailHelp" value="{{ old('keterangan') }}">
    @error('keterangan')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
 </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
