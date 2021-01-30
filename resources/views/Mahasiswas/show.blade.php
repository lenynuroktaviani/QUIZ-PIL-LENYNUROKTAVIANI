@extends('layouts.app')

@section('title', 'cobaaaa')

@section('content')
<div class="card">
    <div class="card-body">
            <h3>NAMA MAHASISWA : {{ $mahasiswa['nama_mahasiswa'] }}</h3>
            <h3>ALAMAT : {{ $mahasiswa['alamat'] }}</h3>
            <h3>NO TELEPON : {{ $mahasiswa['no_tlp'] }}</h3>
            <h3>EMAIL : {{ $mahasiswa['email'] }}</h3>
    </div>
</div>
@endsection 
