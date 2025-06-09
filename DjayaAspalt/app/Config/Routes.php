<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index'); // Arahkan root ke halaman login

// 🔐 LOGIN & LOGOUT (Bebas Akses)
$routes->get('login', 'Login::index');         // ➜ tampilan form login
$routes->post('login', 'Login::login');        // ➜ proses login
$routes->get('logout', 'Login::logout');       // ➜ proses logout

// 🔓 BEBAS DIAKSES TANPA LOGIN (Hanya Halaman Info Umum)
$routes->get('dashboard', 'Pages::dashboard'); // Dashboard umum bisa diakses semua
$routes->get('gallery', 'Pages::gallery');
$routes->get('hubungi-kami', 'Pages::hubungiKami');
$routes->get('artikel', 'Pages::artikel');
$routes->get('bantuan', 'Pages::bantuan');


// 🔐 HARUS LOGIN - AKses untuk SEMUA Pengguna yang sudah Login
// Rute ini akan melewati AuthFilter tanpa argumen role, hanya memastikan user sudah login
$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('profile', 'Pages::profile');
    // Jika ada halaman lain yang semua user login bisa akses
    // $routes->get('halaman-bersama', 'Pages::halamanBersama');
});


// 🔐 HARUS LOGIN - Akses KHUSUS PELANGGAN ('customer')
// Rute ini hanya bisa diakses oleh user dengan role 'customer'
$routes->group('', ['filter' => 'auth:customer'], function($routes) {
    $routes->get('pemesanan', 'Pages::pemesanan');
    $routes->get('penyewaan-barang', 'Pages::penyewaanBarang');
    $routes->get('keranjang', 'Pages::keranjang');
    $routes->get('jasa-perbaikan', 'Pages::jasaPerbaikan');

    // Rute untuk proses pemesanan jasa (form dan simpan)
    $routes->get('pemesanan-jasa', 'PemesananJasa::index');
    $routes->post('pemesanan-jasa/simpan', 'PemesananJasa::simpan');
});


// 🔐 HARUS LOGIN - Akses KHUSUS ADMIN ('admin')
// Rute ini hanya bisa diakses oleh user dengan role 'admin'
$routes->group('admin', ['filter' => 'auth:admin'], function($routes) {
    $routes->get('/', 'Admin::index'); // Contoh halaman dashboard admin
    $routes->get('manajemen-pengguna', 'Admin::manajemenPengguna'); // Contoh halaman manajemen pengguna
    $routes->get('kelola-pemesanan', 'Admin::kelolaPemesanan'); // Contoh halaman kelola pemesanan
    // Tambahkan rute khusus admin lainnya di sini
});

// Jika Anda memiliki peran CS terpisah, Anda bisa membuat grup lain
// $routes->group('cs', ['filter' => 'auth:cs'], function($routes) {
//     $routes->get('/', 'Cs::index');
//     $routes->get('daftar-tiket', 'Cs::daftarTiket');
// });