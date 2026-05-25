<?php
/**
 * View: tentang/index.php
 * Halaman Tentang (Eco-Modern Premium Redesign)
 */
echo view('layouts/main', [
    'title'       => $title,
    'currentPage' => 'tentang',
    'content'     => '
<main id="wp--skip-link--target" style="overflow-x: hidden; padding-bottom: 80px;">
  <!-- Modern Banner Section -->
  <section class="modern-page-banner">
    <div class="container">
      <h1 class="modern-page-title">Tentang Proklim Purbayan</h1>
    </div>
  </section>

  <!-- Modern Page Content Box -->
  <div class="container">
    <div class="modern-content-box">
      <p>Selamat datang di portal resmi <b>Proklim Purbayan</b>!</p>
      <p>Proklim Purbayan adalah sebuah organisasi aksi lingkungan hidup kemasyarakatan tingkat rukun warga (RW) nirlaba yang didirikan dengan komitmen kuat untuk mempromosikan kesadaran lingkungan, adaptasi terhadap perubahan iklim ekstrem, dan pengembangan sirkular ekonomi sirkular tingkat lokal. Kami percaya bahwa setiap kontribusi terkecil dari tiap rumah tangga dalam mengelola sampah, menanam sayuran mandiri, dan menjaga kebersihan air, akan memberikan dampak positif masif bagi kelangsungan ekosistem bumi.</p>
      
      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">

      <h3 style="font-size: 1.8rem; margin-bottom: 24px;">Visi &amp; Misi Organisasi</h3>
      
      <h4 style="font-size: 1.25rem; color: var(--accent-dark); font-family: var(--font-heading); margin-top: 20px; font-weight: 700;">Visi Utama kami</h4>
      <p>Mewujudkan tatanan pemukiman masyarakat yang mandiri, tangguh terhadap perubahan iklim, dan hidup selaras secara harmonis dengan alam. Kami bertekad untuk menyebarkan edukasi lingkungan, memicu partisipasi gotong-royong aktif, dan menjadi pionir aksi lingkungan berkelanjutan di wilayah Purbayan.</p>

      <h4 style="font-size: 1.25rem; color: var(--accent-dark); font-family: var(--font-heading); margin-top: 30px; font-weight: 700;">Misi Kerja kami</h4>
      
      <ul class="modern-list">
        <li>
          <b>1. Pendidikan & Edukasi Lingkungan Sejak Dini</b><br>
          Membangun fondasi kesadaran ekologis generasi muda melalui penyuluhan yang menyenangkan, interaktif, dan mudah dimengerti mengenai pentingnya merawat kelestarian alam dan lingkungan sekitar.
        </li>
        <li>
          <b>2. Aksi Nyata Rehabilitasi & Pelestarian Alam</b><br>
          Melaksanakan pemeliharaan keanekaragaman hayati lokal lewat penghijauan, budidaya tanaman obat keluarga (TOGA), pemeliharaan kebersihan air, dan mitigasi resiko kebencanaan skala kecil.
        </li>
        <li>
          <b>3. Sirkular Ekonomi & Ketahanan Pangan</b><br>
          Mendorong pertumbuhan ekonomi sirkular melalui pemilahan sampah anorganik yang dikonversi menjadi rupiah di Bank Sampah Bunga Raya, serta menggalakkan pertanian hidroponik mandiri untuk ketahanan pangan.
        </li>
        <li>
          <b>4. Penguatan Partisipasi Gotong Royong Warga</b><br>
          Mewadahi dan memicu keterlibatan aktif warga rukun tetangga dan RW dalam aksi kerja bakti bersih lingkungan secara berkala demi mewujudkan kampung iklim lestari yang nyaman ditinggali.
        </li>
      </ul>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">
      
      <p>Kami meyakini bahwa melalui kolaborasi nyata dan sinergi harmonis antar-warga, bumi yang sejuk dan asri bukan hanya sebuah impian. Mari bergabung menjadi bagian dari gerakan peduli lingkungan bersama Proklim Purbayan!</p>
      
      <p>Terima kasih atas segala dukungan, kontribusi, dan kunjungan Anda ke portal kami.</p>
      
      <div style="margin-top: 60px;">
        <p style="margin-bottom: 5px; color: var(--text-muted);">Salam Lestari &amp; Salam Hijau,</p>
        <h4 style="font-family: var(--font-heading); color: var(--primary-dark); font-size: 1.25rem; font-weight: 700;">Tim Penggerak Proklim Purbayan</h4>
      </div>
    </div>
  </div>
</main>
',
]);
