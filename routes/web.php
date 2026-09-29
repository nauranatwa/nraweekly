<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/profile', function () {
    return view('profile', [
        "name" => "Naura Natwa",
        "nim" => "13242520052",
        "prodi" => "Teknologi Informasi",
        "gambar" => "nats.jpg",
    ]);
});
