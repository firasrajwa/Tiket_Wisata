@extends('layout')

@section('title', 'Beranda')

@section('content')
    <h1>Selamat Datang di Sistem Tiket Wisata</h1>
    <p>Silakan pilih destinasi wisata untuk melihat harga tiket:</p>

    <div style="display:flex; flex-direction:column; align-items:center; margin-top:20px;">
        <a href="/tiket/Papuma/20000" style="background:white; padding:12px 25px; margin:8px; border-radius:10px; text-decoration:none; color:#2d3436; font-weight:600; box-shadow:0 4px 10px rgba(0,0,0,0.1); width:250px;">🌊 Tiket Papuma (Rp 20.000)</a>
        <a href="/tiket/WatuUlo/15000" style="background:white; padding:12px 25px; margin:8px; border-radius:10px; text-decoration:none; color:#2d3436; font-weight:600; box-shadow:0 4px 10px rgba(0,0,0,0.1); width:250px;">🏝️ Tiket Watu Ulo (Rp 15.000)</a>
        <a href="/tiket/PancerPuger/10000" style="background:white; padding:12px 25px; margin:8px; border-radius:10px; text-decoration:none; color:#2d3436; font-weight:600; box-shadow:0 4px 10px rgba(0,0,0,0.1); width:250px;">🏖️ Tiket Pancer Puger (Rp 10.000)</a>
    </div>
@endsection
