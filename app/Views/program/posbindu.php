<?php
/**
 * View: program/posbindu.php
 * Halaman Detail Posbindu-PTM (Eco-Modern Premium Redesign)
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
        <img src="' . base_url('assets/logo/logo-posbindu.jpg') . '" alt="Logo Posbindu-PTM" style="width: 120px; height: 120px; border-radius: var(--radius-md); object-fit: cover; box-shadow: var(--shadow-md); border: 3px solid #ffffff; flex-shrink: 0;" />
        <div style="flex: 1; min-width: 250px;">
          <h2 style="font-size: 2rem; color: var(--text-dark); margin-bottom: 8px;">Posbindu-PTM</h2>
          <p style="font-size: 1.1rem; color: var(--primary-dark); font-weight: 600; margin-bottom: 0; font-family: var(--font-heading);">Pos Binaan Terpadu Deteksi Dini & Monitoring Penyakit Tidak Menular</p>
        </div>
      </div>

      <p>Selamat datang di halaman resmi <b>Posbindu-PTM (Pos Binaan Terpadu Penyakit Tidak Menular)</b>, program unggulan di bidang kesehatan preventif bagi warga usia produktif hingga lansia di Proklim Purbayan.</p>
      <p>Posbindu-PTM merupakan bagian vital dari upaya kesehatan berbasis masyarakat yang difasilitasi oleh kader kesehatan terlatih. Tujuan utamanya adalah melakukan monitoring, skrining dini, dan tindak lanjut terhadap faktor risiko penyakit tidak menular (seperti hipertensi, diabetes melitus, kolesterol tinggi, penyakit jantung, dan obesitas) secara mandiri dan periodik.</p>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">

      <!-- Section: Apa itu Posbindu PTM -->
      <h3 style="font-size: 1.8rem; margin-bottom: 20px;">Pentingnya Deteksi Dini PTM</h3>
      <p>Penyakit Tidak Menular sering kali berkembang tanpa gejala awal yang nyata (sering dijuluki *silent killer*). Melalui Posbindu-PTM, warga diajak untuk secara proaktif memeriksakan kondisi fisik dasar mereka secara rutin guna mencegah komplikasi serius di masa depan.</p>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">

      <!-- Section: Layanan Posbindu PTM -->
      <h3 style="font-size: 1.8rem; margin-bottom: 24px;">Layanan Skrining Kesehatan Posbindu</h3>
      <p>Posbindu-PTM Purbayan menawarkan serangkaian pemeriksaan kesehatan dasar yang dilakukan dengan peralatan digital standar medis:</p>

      <ul class="modern-list">
        <li>
          <b>Pemeriksaan Tekanan Darah</b><br>
          Skrining tensi darah berkala menggunakan tensimeter digital untuk mendeteksi dini risiko penyakit hipertensi dan komplikasi jantung.
        </li>
        <li>
          <b>Pengukuran Antropometri Tubuh</b><br>
          Pemantauan berat badan, tinggi badan, indeks massa tubuh (IMT), serta lingkar perut guna memetakan tingkat risiko obesitas sentral secara dini.
        </li>
        <li>
          <b>Cek Cepat Kimia Darah</b><br>
          Pemeriksaan kadar gula darah sewaktu dan kolesterol total secara terjadwal untuk deteksi dini diabetes dan hiperkolesterolemia.
        </li>
        <li>
          <b>Konsultasi Pola Hidup Sehat & Gizi</b><br>
          Konseling interaktif mengenai pentingnya diet rendah garam, batasan asupan gula, pengurangan lemak jenuh, serta cara menjaga kestabilan berat badan ideal.
        </li>
        <li>
          <b>Kampanye Gerakan PHBS & GERMAS</b><br>
          Edukasi pembudayaan Gerakan Masyarakat Hidup Sehat (GERMAS) yang berfokus pada aktivitas fisik minimal 30 menit sehari, konsumsi buah-sayuran lokal, serta tidak merokok.
        </li>
      </ul>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">

      <div style="background: var(--accent-light); border: 1px solid rgba(13, 148, 136, 0.15); padding: 30px; border-radius: var(--radius-md); text-align: center; margin-top: 40px;">
        <h4 style="font-family: var(--font-heading); color: var(--accent-dark); font-size: 1.35rem; font-weight: 700; margin-bottom: 8px;">Mencegah Lebih Baik daripada Mengobati</h4>
        <p style="margin-bottom: 0; color: var(--text-muted); font-size: 0.95rem;">Mari luangkan waktu sejenak setiap bulan untuk memantau kesehatan tubuh kita demi masa tua yang aktif, bahagia, dan mandiri bersama keluarga.</p>
      </div>

      <div style="margin-top: 60px;">
        <p style="margin-bottom: 5px; color: var(--text-muted);">Salam Lestari, Sehat &amp; Bugar,</p>
        <h4 style="font-family: var(--font-heading); color: var(--primary-dark); font-size: 1.25rem; font-weight: 700;">Tim Kader Kesehatan Posbindu-PTM Purbayan</h4>
      </div>
    </div>
  </div>
</main>
',
]);
