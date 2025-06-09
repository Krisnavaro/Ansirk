<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="container">
<div class="text-center my-5">
    <h1 class="mt-1" style="font-size: 1.5rem;">Gallery Portfolio Projek yang Telah Kami Selesaikan</h1>
    <h2 class="mt-1" style="font-size: 2rem;">Gallery Portfolio Projek CV. Djana Aspalt</h2>
</div>

    <div class="row gallery-container">
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal1.png" class="card-img-top" alt="Projek 1">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal2.png" class="card-img-top" alt="Projek 2">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal3.png" class="card-img-top" alt="Projek 3">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal4.png" class="card-img-top" alt="Projek 4">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal5.png" class="card-img-top" alt="Projek 5">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal6.png" class="card-img-top" alt="Projek 6">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal7.png" class="card-img-top" alt="Projek 7">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal8.png" class="card-img-top" alt="Projek 8">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal9.png" class="card-img-top" alt="Projek 9">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal10.png" class="card-img-top" alt="Projek 10">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal11.png" class="card-img-top" alt="Projek 11">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal12.png" class="card-img-top" alt="Projek 12">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal13.png" class="card-img-top" alt="Projek 13">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal14.png" class="card-img-top" alt="Projek 14">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal15.png" class="card-img-top" alt="Projek 15">
            </div>
        </div>
        <div class="col-md-3 col-sm-6 gallery-item mb-4">
            <div class="card">
                <img src="/assets/gallery/gal16.png" class="card-img-top" alt="Projek 16">
            </div>
        </div>
    </div>
</div>

<style>
    .gallery-item {
        transition: transform 0.3s;
    }
    .gallery-item:hover {
        transform: scale(1.03);
    }
    .card {
        height: 100%;
    }
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
</style>

<?= $this->endSection() ?>