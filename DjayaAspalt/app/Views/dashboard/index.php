<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="banner mb-4">
  <img src="<?= base_url('assets/banner1.png') ?>" class="w-100 rounded" alt="Banner">
</div>

<h5 class="text-center mb-4"><strong>DJAYA ASPALT</strong>, Bisnis yang melakukan apa sih?</h5>

<div class="row text-center">
  <div class="col-md-6">
    <a href="<?= base_url('jasa-perbaikan') ?>" style="text-decoration: none; color: black;">
      <img src="<?= base_url('assets/Perbaikan Jalan.png') ?>" width="150">
      <p><strong>Jasa Perbaikan Jalan</strong></p>
    </a>
  </div>
  <div class="col-md-6">
    <a href="<?= base_url('penyewaan-barang') ?>" style="text-decoration: none; color: black;">
      <img src="<?= base_url('assets/Penyewaan Barang.png') ?>" width="150">
      <p><strong>Penyewaan Barang</strong></p>
    </a>
  </div>
</div>

<?= $this->endSection() ?>
