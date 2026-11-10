@extends('layouts.app')
@section('title', 'Kelola Buku')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold text-success">Daftar Buku Perpustakaan</h4>
    <span class="badge bg-success px-3 py-2">Petugas: {{ $username }}</span>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <table class="table table-hover align-middle">
            <thead class="table-success">
                <tr>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Stok Tersedia</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataBuku as $buku)
                <tr>
                    <td class="fw-bold">{{ $buku['kode'] }}</td>
                    <td>{{ $buku['judul'] }}</td>
                    <td>{{ $buku['stok'] }} Eksemplar</td>
                    <td>
                        @if($buku['stok'] > 2)
                            <span class="badge bg-primary">{{ $buku['status'] }}</span>
                        @elseif($buku['stok'] > 0)
                            <span class="badge bg-warning text-dark">{{ $buku['status'] }}</span>
                        @else
                            <span class="badge bg-danger">{{ $buku['status'] }}</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection