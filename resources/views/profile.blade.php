@extends('layouts.main')

@section('content')
    <h1>HALAMAN PROFILE</h1>

    <p>
        Nama : {{ $name }}
        NIM : {{ $nim }}
        Prodi : {{ $prodi }}
    </p>

    <img src="images/{{ $gambar }}" width="200px" height="200">
@endsection