<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="container py-5">

    <div class="row">
        <!-- Artikel 1 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="/assets/artikel/art1.png" class="card-img-top" alt="Cor Beton Tangerang">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-primary">Kontraktor</span>
                        <small class="text-muted">30 Jan 2023</small>
                    </div>
                    <h5 class="card-title">Biaya Kontraktor Cor Beton Tangerang</h5>
                    <p class="card-text">Informasi terbaru tentang biaya kontraktor cor beton di wilayah Tangerang dan sekitarnya...</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Artikel 2 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="/assets/artikel/art2.png" class="card-img-top" alt="Jalan Jakarta Timur">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-success">Jasa</span>
                        <small class="text-muted">29 Apr 2022</small>
                    </div>
                    <h5 class="card-title">Kontraktor Specialist Jalan Jakarta Timur</h5>
                    <p class="card-text">Layanan kontraktor specialist jalan untuk wilayah Jakarta Timur dengan kualitas terbaik...</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Artikel 3 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="/assets/artikel/art3.png" class="card-img-top" alt="Jalan Jakarta Utara">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-warning text-dark">Harga</span>
                        <small class="text-muted">30 Jan 2023</small>
                    </div>
                    <h5 class="card-title">Harga Kontraktor Jalan Jakarta Utara</h5>
                    <p class="card-text">Update harga terbaru untuk jasa kontraktor jalan di wilayah Jakarta Utara...</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Artikel 4 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="/assets/artikel/art4.png" class="card-img-top" alt="Pengaspalan Jakarta Selatan">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-info">Pengaspalan</span>
                        <small class="text-muted">30 Jan 2023</small>
                    </div>
                    <h5 class="card-title">Harga Jasa Pengaspalan Jalan Raya Jakarta Selatan</h5>
                    <p class="card-text">Informasi lengkap tentang harga jasa pengaspalan jalan raya di Jakarta Selatan...</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Artikel 5 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="/assets/artikel/art5.png" class="card-img-top" alt="Perbaikan Jalan">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-secondary">Tips</span>
                        <small class="text-muted">15 Mar 2023</small>
                    </div>
                    <h5 class="card-title">Tips Memilih Kontraktor Jalan yang Tepat</h5>
                    <p class="card-text">Panduan lengkap untuk memilih kontraktor jalan profesional dan berpengalaman...</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Artikel 6 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="/assets/artikel/art6.png" class="card-img-top" alt="Material Aspal">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-danger">Material</span>
                        <small class="text-muted">10 Feb 2023</small>
                    </div>
                    <h5 class="card-title">Jenis-jenis Material Aspal untuk Jalan</h5>
                    <p class="card-text">Mengenal berbagai jenis material aspal yang biasa digunakan untuk pengaspalan jalan...</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mt-4">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>

<style>
    .card {
        transition: transform 0.3s, box-shadow 0.3s;
        border: none;
        border-radius: 10px;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .card-img-top {
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .badge {
        font-size: 0.8rem;
        padding: 0.35em 0.65em;
    }
</style>

<?= $this->endSection() ?>