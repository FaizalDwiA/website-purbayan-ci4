<?php
/**
 * View: program/bank_sampah.php
 * Halaman Detail Bank Sampah (Eco-Modern Premium Redesign)
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
        <img src="' . base_url('assets/logo/logo bank sampah.jpg') . '" alt="Logo Bank Sampah" style="width: 120px; height: 120px; border-radius: var(--radius-md); object-fit: cover; box-shadow: var(--shadow-md); border: 3px solid #ffffff; flex-shrink: 0;" />
        <div style="flex: 1; min-width: 250px;">
          <h2 style="font-size: 2rem; color: var(--text-dark); margin-bottom: 8px;">Bank Sampah Bunga Raya</h2>
          <p style="font-size: 1.1rem; color: var(--primary-dark); font-weight: 600; margin-bottom: 0; font-family: var(--font-heading);">Pilar Ekonomi Sirkular & Pengelolaan Sampah Kreatif</p>
        </div>
      </div>

      <p>Selamat datang di halaman resmi <b>Bank Sampah Bunga Raya</b>, motor penggerak ekonomi sirkular ramah lingkungan di Proklim Purbayan.</p>
      <p>Seperti namanya, bank sampah merupakan lembaga kemasyarakatan tingkat lokal yang mengelola pemilahan limbah anorganik rumah tangga secara cerdas. Uniknya, bank ini tidak diatur oleh Otoritas Jasa Keuangan (OJK), melainkan disupervisi langsung oleh Kementerian Lingkungan Hidup dan Kehutanan (KLHK) RI berlandaskan regulasi Peraturan Menteri Negara Lingkungan Hidup Nomor 13 Tahun 2012.</p>
      <p>Konsep pengolahan sampah berbasis tabungan bernilai ekonomi ini murni lahir di Tanah Air, dicetuskan pertama kali pada tahun 2008 sebagai model gotong royong warga mengatasi darurat sampah sekaligus memberikan nilai tambah kesejahteraan sosial.</p>
      
      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">

      <!-- Section: Mekanisme Kerja -->
      <h3 style="font-size: 1.8rem; margin-bottom: 24px;">Mekanisme Kerja Bank Sampah</h3>
      <p>Kader Bank Sampah Bunga Raya memfasilitasi proses penukaran sampah anorganik melalui alur kerja teratur yang transparan:</p>
      
      <ul class="modern-list">
        <li>
          <b>1. Pemilahan Sampah Mandiri</b><br>
          Setiap nasabah (warga) memilah sampah dari rumah menjadi dua bagian dasar: sampah organik dan sampah anorganik (kertas, kardus, botol plastik, kaleng logam, kaca).
        </li>
        <li>
          <b>2. Penyetoran & Penimbangan</b><br>
          Nasabah membawa sampah anorganik terpilah ke balai pertemuan Bank Sampah Bunga Raya untuk ditimbang secara terbuka oleh petugas kader terlatih.
        </li>
        <li>
          <b>3. Konversi Saldo Tabungan</b><br>
          Berat sampah yang disetorkan dikalikan dengan tarif pasar terupdate, kemudian dicatat langsung sebagai saldo aktif di Buku Tabungan Bank Sampah milik nasabah.
        </li>
        <li>
          <b>4. Daur Ulang & Kreasi Kerajinan</b><br>
          Sampah layak jual disalurkan langsung ke industri daur ulang resmi, sedangkan sebagian sampah plastik kreatif diolah kembali oleh ibu-ibu PKK menjadi produk kerajinan bernilai guna seperti tas belanja cantik, taplak meja, dan hiasan rumah tangga.
        </li>
      </ul>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">

      <!-- Section: Antara Rupiah dan Manfaat -->
      <h3 style="font-size: 1.8rem; margin-bottom: 24px;">Manfaat Menabung Sampah</h3>
      <p>Di Bank Sampah Bunga Raya, saldo tabungan sampah Anda tidak hanya dapat dicairkan dalam bentuk uang tunai, melainkan juga dikembangkan ke berbagai bentuk bantuan manfaat sosial yang fleksibel:</p>

      <ul class="modern-list">
        <li>
          <b>Konversi Kebutuhan Sembako</b><br>
          Tabungan sampah Anda dapat ditukarkan secara berkala dengan sembako segar (minyak goreng, beras, gula) untuk memenuhi kebutuhan harian dapur.
        </li>
        <li>
          <b>Pembayaran Tagihan Bulanan</b><br>
          Nasabah dapat mengajukan pendebetan saldo sampah otomatis untuk melunasi tagihan listrik PLN, pembelian token, atau kebutuhan rutin rumah tangga lainnya.
        </li>
        <li>
          <b>Program Kesehatan & Investasi Emas</b><br>
          Tabungan khusus penukaran saldo menjadi investasi emas mulia skala mikro (emas mini) guna mengamankan masa depan finansial keluarga secara mandiri.
        </li>
      </ul>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">
      
      <div style="text-align: center; padding: 30px; background: var(--accent-light); border-radius: var(--radius-md); border: 1px solid rgba(13, 148, 136, 0.1); margin-top: 40px;">
        <h4 style="font-family: var(--font-heading); color: var(--accent-dark); font-size: 1.35rem; margin-bottom: 10px; font-weight: 700;">"Pandai memilah, tepat untuk dimanfaatkan."</h4>
        <p style="margin-bottom: 0; color: var(--text-muted); font-size: 0.95rem;">Mari jaga kebersihan desa kita sembari mengukir kemandirian finansial keluarga bersama Bank Sampah Bunga Raya!</p>
      </div>

      <div style="margin-top: 60px;">
        <p style="margin-bottom: 5px; color: var(--text-muted);">Salam Lestari &amp; Salam Bersih,</p>
        <h4 style="font-family: var(--font-heading); color: var(--primary-dark); font-size: 1.25rem; font-weight: 700;">Tim Penggerak Bank Sampah Bunga Raya</h4>
      </div>
    </div>
  </div>
</main>
',
]);
