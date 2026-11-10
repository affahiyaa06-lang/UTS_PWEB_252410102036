@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="card shadow-sm border-0 rounded-3">
    <div class="card-body p-5 text-center">
        <h2 class="fw-bold text-success">Selamat Datang, Pustakawan {{ $username }}!</h2>
        <p class="text-muted mt-3">Ini adalah pusat kendali sistem manajemen perpustakaan. Anda dapat mengelola daftar buku dan melihat profil Anda melalui menu di atas.</p>
        <a href="/pengelolaan?username={{ $username }}" class="btn btn-outline-success mt-3 px-4">Lihat Daftar Buku</a>
    </div>
</div>
@endsection