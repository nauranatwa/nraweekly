<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Naura Natwa",
        "nim" => "13242520052",
        "prodi" => "Teknologi Informasi",
        "gambar" => "nats.png",
    ]);
});

Route::get('/berita', [BeritaController::class, 'tampilBerita']);

Route::get('/berita/{slug}', [BeritaController::class, 'getBerita']);

Route::get('/contact', function () {

    return view('contact', [
        "title" => "Contact"
    ]);
});
