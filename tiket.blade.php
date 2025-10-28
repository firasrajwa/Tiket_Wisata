@extends('layout')

@section('title', 'Tiket ' . $tempat)

@section('content')
    <div style="background:white; padding:30px 50px; border-radius:15px; box-shadow:0 8px 20px rgba(0,0,0,0.15); display:inline-block;">
        <h2>Informasi Tiket Wisata</h2>
        <p>Tempat Wisata: <b>{{ $tempat }}</b></p>
        <p>Harga Tiket: <b>Rp {{ number_format($harga, 0, ',', '.') }}</b></p>
        <a href="/" style="display:inline-block; background:#0984e3; color:white; padding:10px 20px; border-radius:10px; text-decoration:none;">⬅ Kembali ke Halaman Utama</a>
    </div>
@endsection
