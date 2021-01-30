@extends('layouts.app')

@section('title', 'ABSENSI MAHASISWA')

@section('content')
<div class="card">
    <div class="card-body">
                <h3>NAMA MATA KULIAH: {{ $matakuliah['nama_matakuliah'] }}</h3>
                <h3>SKS : {{ $matakuliah['sks'] }}</h3>
               
    </div>
</div>
@endsection

