<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function submitLogin(Request $request) {
        $username = $request->input('username');
        // Menggunakan URL relatif agar Codespaces tidak nyasar ke localhost
        return redirect('/dashboard?username=' . urlencode($username));
    }

    public function dashboard(Request $request) {
        $username = $request->query('username', 'Tamu');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request) {
        $username = $request->query('username', 'Tamu');
        
        // Data Array Dinamis Tema Perpustakaan
        $dataBuku = [
            ['kode' => 'BK-001', 'judul' => 'Pemrograman Web Laravel', 'stok' => 5, 'status' => 'Tersedia'],
            ['kode' => 'BK-002', 'judul' => 'Algoritma dan Struktur Data', 'stok' => 2, 'status' => 'Tersedia'],
            ['kode' => 'BK-003', 'judul' => 'Basis Data Relasional', 'stok' => 0, 'status' => 'Dipinjam Full'],
            ['kode' => 'BK-004', 'judul' => 'Kecerdasan Buatan', 'stok' => 10, 'status' => 'Tersedia'],
        ];

        return view('pengelolaan', compact('username', 'dataBuku'));
    }

    public function profile(Request $request) {
        $username = $request->query('username', 'Tamu');
        return view('profile', compact('username'));
    }
}