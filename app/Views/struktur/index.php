<?php
/**
 * View: struktur/index.php
 * Halaman Struktur Organisasi (Eco-Modern Premium Redesign)
 */
echo view('layouts/main', [
    'title'       => $title,
    'currentPage' => 'struktur',
    'content'     => '
<main id="wp--skip-link--target" style="overflow-x: hidden; padding-bottom: 80px;">
  <!-- Modern Page Banner -->
  <section class="modern-page-banner">
    <div class="container">
      <h1 class="modern-page-title">Struktur Organisasi</h1>
    </div>
  </section>

  <!-- Offset Content Container -->
  <div class="container">
    <div class="modern-content-box">
      <p>Selamat datang di halaman resmi <b>Struktur Kepengurusan Proklim Purbayan</b>!</p>
      <p>Proklim Purbayan dikepalai oleh kepengurusan yang solid, berdedikasi tinggi, dan terorganisasi dengan baik. Terdiri dari berbagai divisi operasional dan kader relawan aktif, kami bekerja secara sinergis dan transparan demi mewujudkan tatanan kampung iklim lestari yang tangguh terhadap perubahan iklim global.</p>
      
      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">

      <!-- Section: Bagan Struktur -->
      <h3 style="font-size: 1.8rem; margin-bottom: 24px;">Bagan Struktur Kepengurusan</h3>
      <p style="margin-bottom: 30px;">Silakan klik gambar bagan di bawah ini untuk memperbesar dan melihat struktur organisasi secara lengkap dalam resolusi tinggi:</p>
      
      <!-- Premium Framed Chart Card with Hover Lift -->
      <div style="background: var(--bg-site); border-radius: var(--radius-lg); padding: 24px; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); cursor: pointer; transition: var(--transition);" onclick="bukaModal(this.querySelector(\'img\'))" onmouseover="this.style.transform=\'translateY(-4px)\'; this.style.boxShadow=\'var(--shadow-md)\'; this.style.borderColor=\'var(--primary)\';" onmouseout="this.style.transform=\'translateY(0)\'; this.style.boxShadow=\'var(--shadow-sm)\'; this.style.borderColor=\'var(--border-light)\';">
        <img decoding="async" src="' . base_url('assets/img/struktur/img.jpg') . '" alt="Struktur Organisasi Proklim Purbayan" style="width: 100%; height: auto; display: block; border-radius: var(--radius-md); box-shadow: 0 4px 10px rgba(0,0,0,0.05);" />
      </div>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">
      
      <p>Sinergi gotong royong antar-kader merupakan kunci keberhasilan aksi lingkungan berkelanjutan di wilayah Purbayan. Setiap divisi memikul peranan krusial dalam menyokong operasional sirkular ekonomi Bank Sampah, ketahanan pangan Kantin Bunga Raya, serta pemantauan pos kesehatan terpadu (Posyandu & Posbindu).</p>
      <p>Kami senantiasa membuka pintu selebar-lebarnya bagi warga dan relawan baru yang berhasrat untuk bergabung menjadi kader penggerak lingkungan bersama Proklim Purbayan. Mari berkolaborasi nyata demi masa depan bumi yang sejuk dan asri!</p>

      <div style="margin-top: 60px;">
        <p style="margin-bottom: 5px; color: var(--text-muted);">Salam Lestari &amp; Salam Sejuk,</p>
        <h4 style="font-family: var(--font-heading); color: var(--primary-dark); font-size: 1.25rem; font-weight: 700;">Ketua &amp; Segenap Pengurus Proklim Purbayan</h4>
      </div>
    </div>
  </div>
</main>

<!-- Glassmorphic Lightbox Modal -->
<div id="myModal" style="display:none; position:fixed; z-index:10000; padding-top:60px; left:0; top:0; width:100%; height:100%; overflow:auto; background-color:rgba(15,23,42,0.95); backdrop-filter:blur(10px); -webkit-backdrop-filter:blur(10px); transition: var(--transition);">
  <span onclick="tutupModal()" style="position:absolute; top:20px; right:30px; color:#ffffff; font-size:42px; font-weight:bold; cursor:pointer; transition: var(--transition);" onmouseover="this.style.color=\'var(--primary)\'" onmouseout="this.style.color=\'#ffffff\'">&times;</span>
  <img id="img01" style="margin:auto; display:block; width:92%; max-width:1100px; border-radius: var(--radius-md); box-shadow: var(--shadow-lg); animation: zoom 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);">
  <div id="caption" style="margin:20px auto; display:block; width:80%; max-width:700px; text-align:center; color:#cbd5e1; font-family: var(--font-body); font-weight:600; font-size:1.05rem;">Bagan Struktur Kepengurusan Proklim Purbayan</div>
</div>

<style>
@keyframes zoom {
  from {transform:scale(0.85); opacity:0;} 
  to {transform:scale(1); opacity:1;}
}
</style>
',
    'extra_js'    => '
<script>
  let modal    = document.getElementById("myModal");
  let modalImg = document.getElementById("img01");

  function bukaModal(img) {
    modal.style.display = "block";
    modalImg.src = img.src;
  }

  function tutupModal() {
    modal.style.display = "none";
  }

  // Menutup modal jika diklik di luar gambar
  modal.onclick = function(e) {
    if (e.target === modal) {
      tutupModal();
    }
  }
</script>
',
]);
