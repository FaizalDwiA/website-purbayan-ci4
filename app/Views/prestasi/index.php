<?php
/**
 * View: prestasi/index.php
 * Halaman Prestasi & Penghargaan (Eco-Modern Premium Redesign)
 * @var array $prestasi
 */
echo view('layouts/main', [
    'title'       => $title,
    'currentPage' => 'prestasi',
    'content'     => (function() use ($prestasi) {
        $html = '
<main id="wp--skip-link--target" style="overflow-x: hidden; padding-bottom: 80px;">
  <!-- Modern Page Banner -->
  <section class="modern-page-banner">
    <div class="container">
      <h1 class="modern-page-title">Prestasi Organisasi</h1>
    </div>
  </section>

  <!-- Offset Content Container -->
  <div class="container">
    <div class="modern-content-box">
      <p>Dedikasi dan konsistensi seluruh kader relawan **Proklim Purbayan** dalam merawat kelestarian lingkungan pekarangan desa serta merintis ekonomi sirkular sirkular telah membuahkan apresiasi yang membanggakan. Berikut adalah daftar penghargaan dan piagam apresiasi resmi yang berhasil diraih:</p>
      
      <!-- 2-Column Responsive Awards Cards Grid -->
      <div class="wp-block-gallery has-nested-images columns-default is-cropped is-layout-flex wp-block-gallery-is-layout-flex" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(360px, 1fr)); gap: 30px; margin-top: 40px; margin-bottom: 0;">';

        foreach ($prestasi as $p) {
            $tingkat = ($p['prestasi_kategori'] == 'Madya') ? 'Kabupaten' : 'Nasional';
            
            // Gold gradient overlay for National scale, beautiful Eco gradient for Regional scale!
            $badgeBg = ($tingkat == 'Nasional') 
                ? 'linear-gradient(135deg, #f59e0b 0%, #d97706 100%)' 
                : 'var(--grad-eco)';
                
            $html .= '
        <div class="program-card" style="margin-bottom: 0; box-shadow: var(--shadow-sm); border: 1px solid var(--border-light); transition: var(--transition);" onmouseover="this.style.transform=\'translateY(-6px)\'; this.style.boxShadow=\'var(--shadow-md)\'; this.style.borderColor=\'var(--primary)\';" onmouseout="this.style.transform=\'translateY(0)\'; this.style.boxShadow=\'var(--shadow-sm)\'; this.style.borderColor=\'var(--border-light)\';">
          <div class="program-card-img-wrapper" style="padding-top: 55%; overflow: hidden; position: relative;">
            <img src="' . base_url('uploads/' . $p['prestasi_gambar']) . '" class="program-card-img" alt="' . esc($p['prestasi_judul']) . '" style="transition: var(--transition);" />
            
            <!-- Dynamic Category Badge Overlay -->
            <span style="position: absolute; top: 15px; left: 15px; background: ' . $badgeBg . '; color: #ffffff; font-family: var(--font-heading); font-size: 0.75rem; font-weight: 700; padding: 6px 14px; border-radius: var(--radius-full); text-transform: uppercase; letter-spacing: 1px; box-shadow: 0 4px 10px rgba(0,0,0,0.15); z-index: 10;">
              Tingkat: ' . esc($tingkat) . '
            </span>
          </div>
          <div class="program-card-content" style="padding: 26px;">
            <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); line-height: 1.4; margin-bottom: 0;">
              ' . esc($p['prestasi_judul']) . '
            </h3>
          </div>
        </div>';
        }

        $html .= '
      </div>
      
      <div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>
    </div>
  </div>
</main>';
        return $html;
    })(),
]);
