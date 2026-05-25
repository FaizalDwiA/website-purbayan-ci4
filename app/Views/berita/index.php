<?php
/**
 * View: berita/index.php
 * Halaman Daftar Berita Publik (Eco-Modern Premium Redesign)
 * @var array $list_berita
 */
echo view('layouts/main', [
    'title'       => $title,
    'currentPage' => 'berita',
    'content'     => (function() use ($list_berita) {
        $html = '
<main id="wp--skip-link--target" style="overflow-x: hidden; padding-bottom: 80px;">
  <!-- Modern Page Banner -->
  <section class="modern-page-banner">
    <div class="container">
      <h1 class="modern-page-title">Berita &amp; Kegiatan</h1>
    </div>
  </section>

  <!-- Offset Content Container -->
  <div class="container">
    <div class="modern-content-box">
      <p>Selamat datang di portal warta resmi <b>Proklim Purbayan</b>. Temukan kabar terbaru, liputan dokumentasi aksi lingkungan hidup, serta artikel edukatif mengenai pelestarian alam dan pengembangan sirkular ekonomi lokal di desa kami.</p>
      
      <!-- Responsive News Cards Grid -->
      <div class="news-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">';

        foreach ($list_berita as $g) {
            if (!empty($g['gambar_nama'])) {
                $html .= '
        <article class="program-card" style="margin-bottom: 0;" onmouseover="this.querySelector(\'.btn-more i\').style.transform=\'translateX(4px)\'" onmouseout="this.querySelector(\'.btn-more i\').style.transform=\'translateX(0)\'">
          <div class="program-card-img-wrapper" style="padding-top: 60%; position: relative; overflow: hidden;">
            <img src="' . base_url('uploads/' . $g['gambar_nama']) . '" class="program-card-img" alt="' . esc($g['berita_judul']) . '" style="transition: var(--transition);" />
          </div>
          <div class="program-card-content" style="padding: 26px; display: flex; flex-direction: column; flex-grow: 1;">
            <div style="font-size: 0.8rem; color: var(--primary-dark); font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 12px; font-family: var(--font-heading);">
              <i class="far fa-calendar-alt" style="margin-right: 6px;"></i> Warta Proklim
            </div>
            <h3 style="font-size: 1.25rem; margin-bottom: 20px; line-height: 1.45; font-weight: 700;">
              <a href="' . site_url('berita/' . $g['berita_id']) . '" style="color: var(--text-dark); transition: var(--transition);">' . esc($g['berita_judul']) . '</a>
            </h3>
            <a class="btn-more" href="' . site_url('berita/' . $g['berita_id']) . '" style="margin-top: auto; font-weight: 700; font-size: 0.9rem; color: var(--primary-dark); display: inline-flex; align-items: center; gap: 6px;">
              Baca Selengkapnya <i class="fas fa-arrow-right" style="transition: var(--transition);"></i>
            </a>
          </div>
        </article>';
            }
        }

        $html .= '
      </div>
    </div>
  </div>
</main>';
        return $html;
    })(),
]);
