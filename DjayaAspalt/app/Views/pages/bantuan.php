<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="container">
    
    <div class="mb-5">
        <p class="lead">Halo,</p>
        <p class="lead"><strong>Apakah ada yang bisa kami bantu?</strong></p>
        <p>Pilih Topik sesuai kendala</p>
    </div>


    <div class="row text-center mb-5">
        <div class="col-md-2">
            <h3>Pemesanan</h3>
        </div>
        <div class="col-md-2">
            <h3>Pembayaran</h3>
        </div>
        <div class="col-md-2">
            <h3>Pembayaran</h3>
        </div>
        <div class="col-md-2">
            <h3>Paket/promo</h3>
        </div>
    </div>

    <h3 class="mb-4">Yang Sering ditanyakan</h3>
    
        <a href="#" class="list-group-item list-group-item-action">Bagaimana cara menggunakan paket projek?</a>
        <hr class="my-2">
        <a href="#" class="list-group-item list-group-item-action">Apa saja metode pembayaran?</a>
        <hr class="my-2">
        <a href="#" class="list-group-item list-group-item-action">Apa saja paket projek yang sedang berlangsung?</a>
        <hr class="my-2">
        <a href="#" class="list-group-item list-group-item-action">Bagaimana mengubah metode pembayaran?</a>
        <hr class="my-2">
        <a href="#" class="list-group-item list-group-item-action">Berapa lama waktu pengiriman?</a>
        <hr class="my-2">
        <img src="assets/bantuan/cus1.png" alt="Customer Service" style="width: 400px; height: auto; display: block; margin: 2  0px auto;">
</div>
<?= $this->endSection() ?>