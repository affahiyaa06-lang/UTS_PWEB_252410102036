@extends('layouts.app')
@section('title', 'Profil Pustakawan')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow-sm border-0 text-center p-4 rounded-3">
            <img src="https://ui-avatars.com/api/?name={{ urlencode($username) }}&background=198754&color=fff&size=128" 
                 class="rounded-circle mx-auto mb-3 shadow-sm" alt="Foto Profil">
            <h3 class="fw-bold text-success">{{ $username }}</h3>
            <p class="text-muted">Kepala Pustakawan</p>
            
            <ul class="list-group list-group-flush text-start mt-3">
                <li class="list-group-item"><strong>ID Pegawai:</strong> PERPUS-{{ rand(1000,9999) }}</li>
                <li class="list-group-item"><strong>Role:</strong> Administrator</li>
                <li class="list-group-item"><strong>Status:</strong> Aktif</li>
            </ul>
        </div>
    </div>
</div>
@endsection