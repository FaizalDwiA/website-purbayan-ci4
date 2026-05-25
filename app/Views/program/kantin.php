<?php
/**
 * View: program/kantin.php
 * Halaman Detail Kantin Bunga Raya (Eco-Modern Premium Redesign)
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
        <img src="' . base_url('assets/logo/logo kantin.jpg') . '" alt="Logo Kantin Bunga Raya" style="width: 120px; height: 120px; border-radius: var(--radius-md); object-fit: cover; box-shadow: var(--shadow-md); border: 3px solid #ffffff; flex-shrink: 0;" />
        <div style="flex: 1; min-width: 250px;">
          <h2 style="font-size: 2rem; color: var(--text-dark); margin-bottom: 8px;">Kantin Bunga Raya</h2>
          <p style="font-size: 1.1rem; color: var(--primary-dark); font-weight: 600; margin-bottom: 0; font-family: var(--font-heading);">Sentra Ketahanan Pangan & Kuliner Sehat Bebas Sampah Plastik</p>
        </div>
      </div>

      <p>Selamat datang di halaman resmi <b>Kantin Bunga Raya</b>, sentra ketahanan pangan mandiri dan edukasi kuliner sehat di bawah naungan Proklim Purbayan.</p>
      <p>Kantin Bunga Raya merupakan inisiatif luar biasa yang mengintegrasikan konsep dapur sehat ramah lingkungan (*eco-healthy kitchen*) dengan pemberdayaan pekarangan pangan lestari tingkat RW. Kami fokus pada penyediaan gizi terbaik bagi warga sekaligus merawat bumi dengan memangkas jejak karbon rantai pasok makanan lokal.</p>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">

      <!-- Section: Visi -->
      <h3 style="font-size: 1.8rem; margin-bottom: 20px;">Visi Kantin Bunga Raya</h3>
      <p style="font-size: 1.15rem; line-height: 1.8; color: var(--accent-dark); border-left: 4px solid var(--primary); padding-left: 20px; font-style: italic; margin-bottom: 40px;">
        "Menjadi pusat kuliner sehat, mandiri, dan ramah lingkungan yang menopang ketahanan pangan serta gaya hidup berkelanjutan bagi seluruh masyarakat Purbayan dan sekitarnya."
      </p>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">

      <!-- Section: Program Unggulan -->
      <h3 style="font-size: 1.8rem; margin-bottom: 24px;">Program Unggulan Ketahanan Pangan</h3>
      <p>Dalam menjalankan operasional harian, Kantin Bunga Raya bersandar pada 4 pilar utama aksi lingkungan dan kesehatan:</p>

      <ul class="modern-list">
        <li>
          <b>Penyediaan Menu Sehat & Organik</b><br>
          Menyajikan aneka makanan, minuman, dan olahan herbal tradisional yang diramu secara higienis dari sayuran hasil budidaya hidroponik warga serta tanaman obat keluarga (TOGA) setempat tanpa pengawet sintetik.
        </li>
        <li>
          <b>Zero-Plastic & Zero-Waste Packaging</b><br>
          Kantin berkomitmen penuh meminimalisir sampah dengan melarang keras penggunaan plastik sekali pakai dan styrofoam. Seluruh pesanan dibawa pulang dibungkus dedaunan alami, wadah biodegradable, atau rantang bawaan nasabah sendiri.
        </li>
        <li>
          <b>Edukasi Gizi & Pola Makan Seimbang</b><br>
          Menyelenggarakan kegiatan berkala berupa demo memasak sehat, edukasi pemenuhan gizi seimbang bagi ibu hamil, bayi, dan balita guna meminimalisir angka stunting di wilayah Purbayan.
        </li>
        <li>
          <b>Pemberdayaan Sirkular Ekonomi Ibu-Ibu PKK</b><br>
          Mengaktifkan peran produktif ibu-ibu kader Pembinaan Kesejahteraan Keluarga (PKK) dalam rantai pasok bahan makanan mentah pekarangan rumah tangga hingga pengolahan kuliner guna menambah pendapatan keluarga.
        </li>
      </ul>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">

      <div style="margin-top: 60px;">
        <p style="margin-bottom: 5px; color: var(--text-muted);">Salam Lestari &amp; Hidup Sehat,</p>
        <h4 style="font-family: var(--font-heading); color: var(--primary-dark); font-size: 1.25rem; font-weight: 700;">Tim Penggerak Kantin Bunga Raya</h4>
      </div>
    </div>
  </div>
</main>
',
]);
