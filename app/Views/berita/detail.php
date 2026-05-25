<?php
/**
 * View: berita/detail.php
 * Halaman Detail Berita (Eco-Modern Premium Redesign)
 * @var array  $berita
 * @var array  $gambar
 * @var string $isi
 */
echo view('layouts/main', [
    'title'       => $title,
    'currentPage' => 'berita',
    'extra_css'   => '
<style>
  .slide-kiri { animation: keluar 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards; }
  .slide-kanan { animation: masuk 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards; }
  @keyframes keluar { 
    from { opacity: 1; transform: scale(1); } 
    to { opacity: 0; transform: scale(0.98); } 
  }
  @keyframes masuk  { 
    from { opacity: 0; transform: scale(1.02); } 
    to { opacity: 1; transform: scale(1); } 
  }
</style>
',
    'content'     => '
<main id="wp--skip-link--target" style="overflow-x: hidden; padding-bottom: 80px;">
  <!-- Modern Page Banner -->
  <section class="modern-page-banner">
    <div class="container">
      <h1 class="modern-page-title">Detail Berita</h1>
    </div>
  </section>

  <!-- Offset Content Container -->
  <div class="container">
    <div class="modern-content-box" style="padding: 50px 60px;">
      <!-- Title -->
      <h2 style="font-size: 2.2rem; line-height: 1.35; margin-bottom: 16px; color: var(--text-dark);">' . esc($berita['berita_judul']) . '</h2>
      
      <!-- Meta Information tag -->
      <div style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 35px; font-weight: 600; display: flex; align-items: center; gap: 15px; flex-wrap: wrap;">
        <span><i class="far fa-calendar-alt" style="color: var(--primary); margin-right: 6px;"></i> Rilis Warta</span>
        <span style="color: var(--border-light);">|</span>
        <span><i class="far fa-folder" style="color: var(--primary); margin-right: 6px;"></i> Aksi Lingkungan</span>
        <span style="color: var(--border-light);">|</span>
        <span><i class="far fa-user" style="color: var(--primary); margin-right: 6px;"></i> Admin Proklim</span>
      </div>

      <!-- Immersive Image Slideshow Card Frame -->
      <div style="position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--border-light); margin-bottom: 45px; background: var(--grad-dark); height: 480px; width: 100%;">
        <img id="gambar_berita" src="" class="slide-kanan" alt="Dokumentasi Kegiatan" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.85; transition: 0.8s ease;" />
      </div>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">

      <!-- Article Body Content -->
      <div style="font-size: 1.1rem; line-height: 2; color: var(--slate-700); font-family: var(--font-body);">
        ' . $isi . '
      </div>

      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 40px 0;">

      <!-- Return Button Link -->
      <div style="margin-top: 40px;">
        <a href="' . site_url('berita') . '" class="btn-modern btn-outline" style="font-size: 0.9rem; padding: 12px 28px;">
          <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Kembali ke Daftar Berita
        </a>
      </div>
    </div>
  </div>
</main>
',
    'extra_js'    => '
<script>
  let gambarList = ' . json_encode(array_values($gambar)) . ';
  let gambar_berita = document.getElementById("gambar_berita");
  if (gambarList.length > 0) {
    gambar_berita.src = "' . base_url('uploads/') . '" + gambarList[0]["gambar_nama"];
    let n = 0;
    setInterval(function() {
      n = (n === gambarList.length - 1) ? 0 : n + 1;
      
      // Smooth fade transition
      gambar_berita.classList.replace("slide-kanan", "slide-kiri");
      
      setTimeout(() => { 
        gambar_berita.src = "' . base_url('uploads/') . '" + gambarList[n]["gambar_nama"]; 
        gambar_berita.classList.replace("slide-kiri", "slide-kanan");
      }, 800);
      
    }, 8000);
  }
</script>
',
]);
