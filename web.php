<?php

use Illuminate\Support\Facades\Route;

// 🟦 TUGAS 1 - Halaman Welcome (default Laravel)
Route::get('/', function () {
    return view('welcome');
});

// 🟩 TUGAS 2 - Aplikasi Sistem Tiket Wisata
Route::get('/home', function () {
    return view('beranda');
});


Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/profil/{nama}', function ($nama) {
    return view('profil', ['nama' => $nama]);
});

Route::get('/tiket/{tempat}/{harga}', function ($tempat, $harga) {
    if (!is_numeric($harga)) {
        return "Harga harus berupa angka!";
    }
    return view('tiket', compact('tempat', 'harga'));
});
