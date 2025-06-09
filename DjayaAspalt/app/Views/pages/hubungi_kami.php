
<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
  <div class="row">
    <!-- Info Utama -->
    <div class="col-md-6 mb-3">
      <div class="card p-3">
        <h2 class="fw-bold">Hubungi Kami</h2>
        <h4>CV. Djaya Aspalt</h4>
        <p>Perusahaan jasa pengaspalan jalan dan kontraktor jalan yang berpengalaman dalam melayani jasa pengaspalan dan pemasangan Paving Block/Conblock.</p>
        <div style="display: flex; align-items: flex-start; gap: 10px;">
          <!-- Gambar utama di kiri -->
          <img src="/assets/profile/pro1.png" style="width: 150px;" alt="Pekerjaan Pengaspalan" class="img-fluid rounded">

             <!-- Gambar-gambar dengan link di kanan -->
            <div style="display: flex; flex-direction: column; gap: 10px;">
                <a href="https://wa.me/6281324201464" target="_blank">
                <img src="/assets/hubungi-kami/wa.png" style="width: 150px;" alt="Whatsapp Kami" class="img-fluid rounded">
                </a>
                <a href="sukatmaesco@gmail.com">
                <img src="/assets/hubungi-kami/email.png" style="width: 150px;" alt="Email Kami" class="img-fluid rounded">
                </a>
                <a href="https://www.google.com/search?q=djaya+asplat+jl.abdul+wahid&oq=djaya+asplat+jl.abdul&gs_lcrp=EgZjaHJvbWUqCQgCECEYChigATIGCAAQRRg5MgkIARAhGAoYoAEyCQgCECEYChigATIHCAMQIRiPAtIBCjEzMDM3ajBqMTWoAgiwAgE&sourceid=chrome&ie=UTF-8&lqi=ChxkamF5YSBhc3BoYWx0IGpsLmFiZHVsIHdhaGlkSJ-kt8bQs4CACFooEAAQARgAGAEYAiIcZGpheWEgYXNwaGFsdCBqbCBhYmR1bCB3YWhpZJIBGXJvYWRfY29uc3RydWN0aW9uX2NvbXBhbnmaASRDaGREU1VoTk1HOW5TMFZKUTBGblNVUkdPRXBoVkhSQlJSQUKqAVgQASoRIg1kamF5YSBhc3BoYWx0KCYyHxABIhsPhG-uB3d57LTddSM_wioWzMaZ9Tbm8qXYPgIyIBACIhxkamF5YSBhc3BoYWx0IGpsIGFiZHVsIHdhaGlk-gEECAAQRw#rlimm=1399669793285660123" target="_blank">
                <img src="/assets/hubungi-kami/alamat.png" style="width: 150px;" alt="Alamat Kami" class="img-fluid rounded">
                </a>
            </div>
        </div>
      </div>
    </div>

    <!-- Informasi Kontak -->
    <div class="col-md-6 mb-3">
      <div class="card p-3">
        <h4>Informasi Kontak</h4>
        <p>Apakah anda punya <br>pertanyaan?</p>
        <p><strong>Email:</strong><br><a href="mailto:sukatmaesco@gmail.com">sukatmaesco@gmail.com</a></p>
        <p><strong>Telepon:</strong><br><a href="tel:+6281324201464">+62 813 2420 1464</a></p>
        <p><strong>Jam Operasional:</strong><br>Senin - Sabtu: 08.00 - 17.00 WIB</p>
      </div>
    </div>
  </div>

  <!-- Form Kirim Pesan -->
  <div class="row">
    <div class="col-md-6 mb-3">
      <div class="card p-3">
        <h4>Kirim Pesan kepada Kami</h4>
        <form>
            <div class="row mb-2">
                <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="mb-2">
                <input type="text" class="form-control" placeholder="Subjek">
            </div>
            <div class="mb-2">
                <textarea class="form-control" rows="4" placeholder="Tulis pesan anda..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send a Message</button>
            </form>

      </div>
    </div>

    <!-- Keterangan Kenapa Memilih -->
    <div class="col-md-6 mb-3">
      <div class="card p-3">
        <h4>Kontraktor Aspal jalan Terpercaya & Berpengalaman</h4>
        <p>Kenapa anda harus memilih CV. Djaya Aspalt?</p>
        <p>Di CV. Djaya Aspalt, kami memiliki tim professional dan menggunakan alat-alat canggih serta modern.</p>
      </div>
    </div>
  </div>
</div>
</div>
<?= $this->endSection() ?>
