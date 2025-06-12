<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::splashScreen'); // Arahkan root ke splash screen

// 🔐 LOGIN & LOGOUT
// Rute untuk pilihan login (Pelanggan/Admin)
$routes->get('login', 'Login::index');
$routes->get('login/(:segment)', 'Login::showLoginForm/$1');
$routes->post('login', 'Login::login');
$routes->get('logout', 'Login::logout');

// 🆕 Rute untuk Pendaftaran Akun (Register) - BEBAS DIAKSES
$routes->get('register', 'Register::index');
$routes->post('register', 'Register::registerUser');

// 🔓 BEBAS DIAKSES TANPA LOGIN (Hanya Halaman Info Umum)
$routes->get('dashboard', 'Pages::dashboard'); // Dashboard utama
$routes->get('gallery', 'Pages::gallery');
$routes->get('hubungi-kami', 'Pages::hubungiKami');
$routes->get('artikel', 'Pages::artikel');
$routes->get('bantuan', 'Pages::bantuan');


// 🔐 HARUS LOGIN - Akses untuk SEMUA Pengguna yang sudah Login (ADMIN/CUSTOMER/CS)
$routes->group('', ['filter' => 'auth'], function($routes) {
    // Rute untuk Profil Perusahaan (Sidebar)
    $routes->get('profile-perusahaan', 'Pages::profilePerusahaan');

    // Rute untuk Biodata Pelanggan (Topbar)
    $routes->get('customer-profile', 'Pages::customerProfile');
    $routes->get('customer-profile/edit', 'Pages::editCustomerProfile');
    $routes->post('customer-profile/update', 'Pages::updateCustomerProfile');

    // Histori Pemesanan dan Penyewaan
    $routes->get('histori-pemesanan', 'Pages::historiPemesanan');
    $routes->get('histori-penyewaan', 'Pages::historiPenyewaan');
});


// 🔐 HARUS LOGIN - Akses KHUSUS PELANGGAN ('customer')
$routes->group('', ['filter' => 'auth:customer'], function($routes) {
    // Pemesanan
    $routes->get('pemesanan', 'Pages::pemesanan'); // Pilih Jasa/Barang
    $routes->get('pemesanan-jasa-barang-form1', 'Pages::pemesananJasaBarangForm1'); // Form Data Survey
    $routes->get('pemesanan-jasa-barang-form2', 'Pages::pemesananJasaBarangForm2'); // Form Data Pelaksanaan
    $routes->get('pemesanan-paket', 'Pages::pemesananPaket'); // Pilih Paket

    // Penyewaan
    $routes->get('penyewaan-barang', 'Pages::penyewaanBarang'); // Pilih Alat
    $routes->get('penyewaan-barang/cek-alat/(:segment)', 'Pages::cekAlat/$1'); // Cek Alat
    $routes->get('penyewaan-barang/form/(:segment)', 'Pages::penyewaanForm/$1'); // Form Penyewaan

    // Keranjang (mode ada item)
    $routes->get('keranjang', 'Pages::keranjang');
    // Jika perlu rute untuk keranjang kosong
    $routes->get('keranjang-kosong', 'Pages::keranjangKosong');

    $routes->get('jasa-perbaikan', 'Pages::jasaPerbaikan');
});


// 🔐 HARUS LOGIN - Akses KHUSUS ADMIN ('admin')
$routes->group('admin', ['filter' => 'auth:admin'], function($routes) {
    // Dashboard Admin
    $routes->get('dashboard', 'Admin::index'); // Rute untuk dashboard admin

    // Profil Admin
    $routes->get('profile', 'Admin::adminProfile'); // Rute untuk profil admin
    $routes->get('profile/edit', 'Admin::editAdminProfile');
    $routes->post('profile/update', 'Admin::updateAdminProfile');

    // Manajemen Data Admin
    $routes->get('pelanggan', 'Admin::manajemenPengguna'); // Data Pelanggan
    $routes->get('pelaksanaan', 'Admin::pelaksanaan'); // Data Pelaksanaan
    $routes->get('pemesanan', 'Admin::pemesanan'); // Data Pemesanan
    $routes->get('penyewaan', 'Admin::penyewaan'); // Data Penyewaan
    $routes->get('alat', 'Admin::cekStokAlat'); // Cek Stok Alat
    $routes->get('pembayaran', 'Admin::pembayaran'); // Data Pembayaran
    $routes->get('pembayaran/bukti', 'Admin::buktiPembayaran'); // Bukti Pembayaran
    $routes->get('pembayaran/bukti/detail/(:segment)', 'Admin::detailBuktiPembayaran/$1'); // Detail Bukti Pembayaran
    $routes->get('pengembalian', 'Admin::pengembalian'); // Data Pengembalian

    // Sub-menu Pemesanan (Cek Paket, Cek Stok Material, Cek Pekerja)
    $routes->get('cek-paket', 'Admin::cekPaket');
    $routes->get('cek-stok-full', 'Admin::cekStokFull'); // Stok Material
    $routes->get('cek-pekerja-status', 'Admin::cekPekerjaStatus'); // Status Pekerja
    $routes->get('cek-pekerja-detail/(:segment)', 'Admin::cekPekerjaDetail/$1'); // Detail Pekerja
});