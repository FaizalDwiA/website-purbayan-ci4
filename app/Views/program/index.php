<?php
/**
 * View: program/index.php
 * Halaman Utama Program (Eco-Modern Premium Redesign)
 */
echo view('layouts/main', [
    'title'       => $title,
    'currentPage' => 'program',
    'content'     => '
<main id="wp--skip-link--target" style="overflow-x: hidden; padding-bottom: 80px;">
  <!-- Modern Page Banner -->
  <section class="modern-page-banner">
    <div class="container">
      <h1 class="modern-page-title">Program Proklim Purbayan</h1>
    </div>
  </section>

  <!-- Main Content Container with Offset Content Box -->
  <div class="container">
    <div class="modern-content-box">
      <p>Selamat datang di halaman <b>program kerja unggulan Proklim Purbayan</b>!</p>
      <p>Proklim Purbayan berkomitmen kuat untuk merawat kelestarian lingkungan hidup, menggalakkan sirkular ekonomi sirkular lokal, ketahanan pangan mandiri, serta peningkatan derajat kesehatan masyarakat secara berkelanjutan melalui 4 pilar program utama kami.</p>
      <p style="margin-bottom: 40px;">Berikut adalah program-program kerja terpadu yang aktif kami laksanakan:</p>

      <!-- 4-Column Responsive Program Grid -->
      <div class="program-grid">
        
        <!-- Card 1: Bank Sampah -->
        <article class="program-card">
          <div class="program-card-img-wrapper">
            <img src="' . base_url('assets/logo/logo bank sampah.jpg') . '" class="program-card-img" alt="Bank Sampah Bunga Raya" loading="lazy" />
          </div>
          <div class="program-card-content">
            <div class="program-icon-badge">
              <i class="fas fa-recycle"></i>
            </div>
            <h3><a href="' . site_url('program/bank-sampah') . '">Bank Sampah Bunga Raya</a></h3>
            <p>Mengelola pengumpulan dan pemilahan sampah anorganik rumah tangga untuk didaur ulang serta dikonversi menjadi tabungan bernilai rupiah.</p>
            <a class="btn-more" href="' . site_url('program/bank-sampah') . '">
              Baca Selengkapnya <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </article>

        <!-- Card 2: Kantin Bunga Raya -->
        <article class="program-card">
          <div class="program-card-img-wrapper">
            <img src="' . base_url('assets/logo/logo kantin.jpg') . '" class="program-card-img" alt="Kantin Bunga Raya" loading="lazy" />
          </div>
          <div class="program-card-content">
            <div class="program-icon-badge">
              <i class="fas fa-leaf"></i>
            </div>
            <h3><a href="' . site_url('program/kantin') . '">Kantin Bunga Raya</a></h3>
            <p>Kuliner sehat berbasis tanaman lokal (TOGA) untuk ketahanan pangan mandiri dengan wadah ramah lingkungan bebas plastik sekali pakai.</p>
            <a class="btn-more" href="' . site_url('program/kantin') . '">
              Baca Selengkapnya <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </article>

        <!-- Card 3: Posyandu Purbosari IX -->
        <article class="program-card">
          <div class="program-card-img-wrapper">
            <img src="' . base_url('assets/logo/logo posyandu.jpg') . '" class="program-card-img" alt="Posyandu Purbosari IX" loading="lazy" />
          </div>
          <div class="program-card-content">
            <div class="program-icon-badge">
              <i class="fas fa-baby"></i>
            </div>
            <h3><a href="' . site_url('program/posyandu') . '">Posyandu Purbosari IX</a></h3>
            <p>Pilar kesehatan ibu, bayi, dan balita terpadu melalui pemantauan tumbuh kembang bulanan, imunisasi rutin, dan konsultasi gizi sehat.</p>
            <a class="btn-more" href="' . site_url('program/posyandu') . '">
              Baca Selengkapnya <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </article>

        <!-- Card 4: Posbindu-PTM -->
        <article class="program-card">
          <div class="program-card-img-wrapper">
            <img src="' . base_url('assets/logo/logo-posbindu.jpg') . '" class="program-card-img" alt="Posbindu-PTM" loading="lazy" />
          </div>
          <div class="program-card-content">
            <div class="program-icon-badge">
              <i class="fas fa-heartbeat"></i>
            </div>
            <h3><a href="' . site_url('program/posbindu') . '">Posbindu-PTM</a></h3>
            <p>Pos binaan terpadu monitoring dan deteksi dini penyakit tidak menular (PTM) seperti hipertensi, diabetes, serta obesitas sejak dini.</p>
            <a class="btn-more" href="' . site_url('program/posbindu') . '">
              Baca Selengkapnya <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </article>

      </div>
    </div>
  </div>
</main>
',
]);
