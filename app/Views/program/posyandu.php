<?php
/**
 * View: program/posyandu.php
 * Halaman Detail Posyandu Purbosari IX (Eco-Modern Premium Redesign)
 */
echo view('layouts/main', [
    'title'       => $title,
    'currentPage' => 'program',
    'content'     => '
<main id="wp--skip-link--target" style="overflow-x: hidden; padding-bottom: 80px;">
  <!-- Modern Banner Section (Clean Eco-Teal Gradient) -->
  <section class="modern-page-banner">
    <div class="container">
      <h1 class="modern-page-title">Program Kerja</h1>
    </div>
  </section>

  <!-- Modern Content Box -->
  <div class="container">
    <div class="modern-content-box">
      <!-- Program Header with Floating Logo -->
      <div style="display: flex; gap: 30px; align-items: center; margin-bottom: 40px; flex-wrap: wrap;">
        <img src="' . base_url('assets/logo/logo posyandu.jpg') . '" alt="Logo Posyandu Purbosari IX" style="width: 120px; height: 120px; border-radius: var(--radius-md); object-fit: cover; box-shadow: var(--shadow-md); border: 3px solid #ffffff; flex-shrink: 0;" />
        <div style="flex: 1; min-width: 250px;">
          <h2 style="font-size: 2rem; color: var(--text-dark); margin-bottom: 8px;">Posyandu Purbosari IX</h2>
          <p style="font-size: 1.1rem; color: var(--primary-dark); font-weight: 600; margin-bottom: 0; font-family: var(--font-heading);">Garda Terdepan Kesehatan Ibu, Bayi, & Balita Sehat Bebas Stunting</p>
        </div>
      </div>

      <p>Selamat datang di halaman resmi <b>Posyandu Purbosari IX</b>, pilar garda terdepan pemantauan kesehatan ibu, bayi, dan anak di tingkat RW di wilayah Proklim Purbayan.</p>
      <p>Posyandu merupakan perpanjangan tangan puskesmas terpadu yang memegang peranan krusial dalam deteksi dini tumbuh kembang balita. Tim Posyandu Purbosari IX aktif melayani warga secara kekeluargaan, mengedepankan gotong royong kader kesehatan demi melahirkan generasi emas yang tangguh, cerdas, bebas stunting, serta sadar sanitasi lingkungan.</p>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">

      <!-- Section: Layanan Posyandu -->
      <h3 style="font-size: 1.8rem; margin-bottom: 24px;">Layanan Kesehatan Dasar Posyandu</h3>
      <p>Posyandu Purbosari IX menyediakan berbagai layanan preventif dan pemantauan kesehatan secara berkala bagi ibu dan balita:</p>

      <ul class="modern-list">
        <li>
          <b>Pemantauan Tumbuh Kembang Balita</b><br>
          Penimbangan berat badan, pengukuran tinggi badan, lingkar kepala, dan lingkar lengan balita secara berkala untuk memonitor kurva pertumbuhan anak (KMS) secara teratur.
        </li>
        <li>
          <b>Program Imunisasi Dasar Lengkap</b><br>
          Pemberian imunisasi rutin wajib (seperti BCG, DPT, Polio, Campak, dan Hepatitis B) guna melindungi sistem kekebalan tubuh anak dari ancaman penyakit berbahaya sejak dini.
        </li>
        <li>
          <b>Konsultasi Gizi & PMT Pemulihan</b><br>
          Pemberian Makanan Tambahan (PMT) bergizi tinggi yang dibuat segar oleh tim Kantin Bunga Raya, disertai konseling gizi dan pola makan seimbang bagi anak dengan berat badan kurang.
        </li>
        <li>
          <b>Pemeriksaan Kesehatan Ibu Hamil & Menyusui</b><br>
          Pemantauan tekanan darah, pengukuran lingkar lengan atas (LILA), pemberian vitamin asam folat, penambah darah, serta edukasi eksklusif mengenai Inisiasi Menyusu Dini (IMD) dan ASI Eksklusif.
        </li>
        <li>
          <b>Penyuluhan PHBS Terpadu</b><br>
          Pendidikan kesehatan berkala mengenai Perilaku Hidup Bersih dan Sehat (PHBS), kebersihan sumber air minum, cuci tangan pakai sabun, serta mitigasi penyakit musiman lingkungan.
        </li>
      </ul>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">

      <!-- Section: Jadwal Kegiatan -->
      <h3 style="font-size: 1.8rem; margin-bottom: 20px;">Jadwal Pelayanan Rutin</h3>
      
      <div style="background: var(--grad-eco-light); border-left: 5px solid var(--primary); padding: 30px; border-radius: var(--radius-md); margin-top: 20px;">
        <h4 style="font-family: var(--font-heading); color: var(--primary-dark); font-size: 1.25rem; font-weight: 700; margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
          <i class="fas fa-calendar-alt"></i> Jadwal Bulanan Teratur
        </h4>
        <p style="margin-bottom: 20px; color: var(--slate-700); font-size: 1.05rem; line-height: 1.7;">
          Pelayanan terpadu Posyandu Purbosari IX dilaksanakan rutin **setiap bulan** untuk memudahkan akses kesehatan warga rukun warga. Untuk informasi tanggal pelaksanaan bulan ini dan pendampingan, silakan hubungi kami langsung via kontak.
        </p>
        <a href="' . site_url('kontak') . '" class="btn-modern btn-primary" style="font-size: 0.9rem; padding: 10px 24px;">
          Hubungi Kader Kesehatan <i class="fas fa-arrow-right"></i>
        </a>
      </div>

      <div style="margin-top: 60px;">
        <p style="margin-bottom: 5px; color: var(--text-muted);">Salam Lestari &amp; Salam Sehat Balita,</p>
        <h4 style="font-family: var(--font-heading); color: var(--primary-dark); font-size: 1.25rem; font-weight: 700;">Tim Kader Posyandu Purbosari IX</h4>
      </div>
    </div>
  </div>
</main>
',
]);
