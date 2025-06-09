<?php

namespace App\Controllers;

use App\Controllers\BaseController; // Pastikan ini di-include
use CodeIgniter\HTTP\RedirectResponse; // Tambahkan ini untuk tipe return hint

class Login extends BaseController
{
    // Tampilkan halaman login
    public function index(): string|RedirectResponse
    {
        // Cegah user login ulang kalau sudah login
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }

        return view('login');
    }

    // Proses login
    public function login(): RedirectResponse
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // --- PENTING: BAGIAN INI HARUS DIGANTI DENGAN VERIFIKASI DARI DATABASE ---
        // Ini adalah contoh hardcoded untuk DEMO / UJI COBA CEPAT.
        // Dalam produksi, Anda akan query database dan memverifikasi password hash.
        $users = [
            'admin_jasa' => [ // Username untuk Admin
                'password' => 'admin123', // Password Admin
                'role' => 'admin',
            ],
            'pelanggan_satu' => [ // Username untuk Pelanggan
                'password' => 'passpelanggan', // Password Pelanggan
                'role' => 'customer',
            ],
            // Anda bisa tambahkan user lain di sini
            // 'username_cs' => [
            //     'password' => 'passcs',
            //     'role' => 'cs',
            // ],
        ];
        // --- AKHIR BAGIAN HARDCODED ---

        if (array_key_exists($username, $users) && $users[$username]['password'] === $password) {
            session()->set('logged_in', true);
            session()->set('username', $username);
            session()->set('role', $users[$username]['role']); // Simpan role ke session
            return redirect()->to('/dashboard')->with('success', 'Selamat datang, ' . $username . '!');
        } else {
            return redirect()->back()->with('error', 'Username atau Password salah.');
        }
    }

    // Logout
    public function logout(): RedirectResponse
    {
        session()->destroy();
        return redirect()->to('/');
    }
}