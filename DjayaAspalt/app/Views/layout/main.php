<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Djaya Aspalt Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa; }
    .sidebar {
      width: 200px;
      min-height: 100vh;
      background-color: #ffffff;
      border-right: 1px solid #dee2e6;
      padding-top: 1rem;
    }
    .sidebar a {
      display: block;
      padding: 10px 15px;
      color: #000;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #f1f1f1;
      padding-left: 20px;
      transition: 0.2s;
    }
    .topbar {
      background-color: #f8f9fa;
      padding: 12px 20px;
      border-bottom: 1px solid #dee2e6;
    }
    .topbar input { width: 250px; font-size: 14px; }
    .main-content { padding: 30px; }
  </style>
</head>
<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="text-center mb-4">
        <img src="<?= base_url('assets/logoSamping1.png') ?>" width="140" alt="Logo">
      </div>

      <!-- Menu bebas akses -->
      <a href="<?= base_url('dashboard') ?>">🏠 Home</a>
      <a href="<?= base_url('gallery') ?>">🖼️ Gallery</a>
      <a href="<?= base_url('hubungi-kami') ?>">📞 Hubungi Kami</a>
      <a href="<?= base_url('artikel') ?>">📄 Artikel</a>
      <a href="<?= base_url('bantuan') ?>">❓ Bantuan</a>

      <!-- Menu terbatas -->
      <?php if (session()->get('logged_in')): ?>
        <a href="<?= base_url('profile') ?>">👤 Profile</a>
        <a href="<?= base_url('pemesanan') ?>">📦 Pemesanan</a>
        <a href="<?= base_url('penyewaan-barang') ?>">🏗️ Penyewaan</a>
        <a href="<?= base_url('keranjang') ?>">🛒 Keranjang</a>
        <a href="<?= base_url('logout') ?>" class="text-danger">🚪 Logout</a>
      <?php else: ?>
        <a href="<?= base_url('login') ?>" class="text-primary">🔐 Login</a>
      <?php endif; ?>
    </div>

    <!-- Konten Utama -->
    <div class="flex-grow-1">
      <!-- Topbar -->
      <div class="topbar d-flex justify-content-center align-items-center gap-2">
        <form action="<?= base_url('search') ?>" class="d-flex align-items-center">
          <input class="form-control me-2" type="search" name="q" placeholder="Cari nama...">
        </form>

        <!-- Back -->
        <a href="javascript:history.back()">
          <img src="<?= base_url('assets/Back-01.png') ?>" width="43" alt="Back">
        </a>

        <!-- Cart -->
        <a href="<?= base_url('keranjang') ?>">
          <img src="<?= base_url('assets/Keranjang.png') ?>" width="22" alt="Cart">
        </a>

        <!-- Profile -->
        <?php if (session()->get('logged_in')): ?>
          <a href="<?= base_url('profile') ?>">
            <img src="<?= base_url('assets/Profil-01.png') ?>" width="45" alt="Profile">
          </a>
        <?php else: ?>
          <a href="<?= base_url('login') ?>">
            <img src="<?= base_url('assets/Profil-01.png') ?>" width="45" alt="Login">
          </a>
        <?php endif; ?>
      </div>

      <!-- Main Konten -->
      <div class="main-content">
        <?= $this->renderSection('content') ?>
      </div>
    </div>
  </div>
</body>
</html>
