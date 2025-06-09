<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    private function mustLogin()
    {
        return session()->get('logged_in');
    }

    private function isAdmin()
    {
        return $this->mustLogin() && session()->get('role') === 'admin';
    }

    private function isCustomer()
    {
        return $this->mustLogin() && session()->get('role') === 'customer';
    }
    
    // Jika Anda ingin membuat peran CS terpisah:
    // private function isCs()
    // {
    //     return $this->mustLogin() && session()->get('role') === 'cs';
    // }

    public function dashboard()        { return view('dashboard/index'); }
    public function gallery()          { return view('pages/gallery'); }
    public function hubungiKami()      { return view('pages/hubungi_kami'); }
    public function artikel()          { return view('pages/artikel'); }
    public function bantuan()          { return view('pages/bantuan'); }

    // Halaman yang hanya bisa diakses oleh Admin
    public function adminPanel() {
        if (!$this->isAdmin()) {
            return redirect()->to('/dashboard')->with('error', 'Akses ditolak. Anda bukan admin.');
        }
        // Contoh: return view('admin/panel');
        return "Ini halaman admin!"; // Placeholder
    }

    public function profile() {
        if (!$this->mustLogin()) return redirect()->to('/')->with('error', 'Harap login untuk mengakses halaman profil.');
        // Jika ingin spesifik ke customer atau admin:
        // if (!$this->isCustomer() && !$this->isAdmin()) return redirect()->to('/')->with('error', 'Akses ditolak.');
        return view('pages/profile');
    }

    public function pemesanan() {
        if (!$this->isCustomer()) return view('pages/pemesanan_message'); // Hanya customer yang bisa memesan
        return view('pages/pemesanan');
    }

    public function penyewaanBarang() {
        if (!$this->isCustomer()) return view('pages/penyewaan_barang_message'); // Hanya customer yang bisa menyewa
        return view('pages/penyewaan_barang');
    }

    public function keranjang() {
        if (!$this->isCustomer()) return view('pages/keranjang_message'); // Hanya customer yang bisa melihat keranjang
        return view('pages/keranjang');
    }

    public function jasaPerbaikan() {
        if (!$this->isCustomer()) return view('pages/jasa_perbaikan_message'); // Hanya customer yang bisa melihat jasa perbaikan
        return view('pages/jasa_perbaikan');
    }

    // Tambahkan fungsi lain untuk halaman khusus CS jika diperlukan
    // public function kelolaPesanan() {
    //     if (!$this->isCs() && !$this->isAdmin()) { // CS atau Admin bisa kelola pesanan
    //         return redirect()->to('/dashboard')->with('error', 'Akses ditolak.');
    //     }
    //     return view('cs/kelola_pesanan');
    // }
}