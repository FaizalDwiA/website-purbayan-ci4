<?php
/**
 * View: home/index.php
 * Halaman Beranda (Eco-Modern Premium Redesign)
 */

// Generate Berita HTML dynamically before layout render to avoid string concatenation syntax issues
$berita_html = '';
$limited_berita = array_slice($berita ?? [], 0, 3);
if (!empty($limited_berita)) {
    foreach($limited_berita as $b) {
        $text_preview = strip_tags(html_entity_decode($b['berita_teks']));
        $text_preview = strlen($text_preview) > 110 ? substr($text_preview, 0, 105) . '...' : $text_preview;
        $detail_url = site_url('berita/' . $b['berita_id']);
        $berita_html .= '
        <div class="berita-card">
          <div class="berita-thumbnail-wrapper">
            <img src="' . base_url('assets/img/hero/img.jpeg') . '" class="berita-thumbnail" alt="' . esc($b['berita_judul']) . '" />
            <span class="berita-badge">Kabar Kampung</span>
          </div>
          <div class="berita-body">
            <div class="berita-meta">
              <span><i class="far fa-calendar" style="color: var(--primary-dark);"></i> ' . date('d M Y') . '</span>
              <span><i class="far fa-clock" style="color: var(--primary-dark);"></i> 3 Menit Baca</span>
            </div>
            <h3><a href="' . $detail_url . '">' . esc($b['berita_judul']) . '</a></h3>
            <p>' . esc($text_preview) . '</p>
            <div style="margin-top: auto; padding-top: 10px;">
              <a href="' . $detail_url . '" class="btn-more" style="font-weight: 700; color: var(--primary-dark);">Baca Detail <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>';
    }
} else {
    $berita_html .= '
    <div class="berita-card">
      <div class="berita-thumbnail-wrapper">
        <img src="' . base_url('assets/img/hero/img.jpeg') . '" class="berita-thumbnail" alt="Rapat Koordinasi" />
        <span class="berita-badge">Pengumuman</span>
      </div>
      <div class="berita-body">
        <div class="berita-meta">
          <span><i class="far fa-calendar"></i> 25 Mei 2026</span>
          <span><i class="far fa-clock"></i> 4 Menit Baca</span>
        </div>
        <h3><a href="#">Rapat Evaluasi Triwulan Dinas Lingkungan Hidup</a></h3>
        <p>Sosialisasi program mitigasi emisi gas buang tingkat kelurahan bersama fasilitator Proklim Sukoharjo...</p>
        <a href="#" class="btn-more" style="font-weight: 700; color: var(--primary-dark);">Baca Detail <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>';
}

echo view('layouts/main', [
    'title'       => $title,
    'currentPage' => 'home',
    'extra_css'   => '',
    'content'     => '

  <main id="wp--skip-link--target" style="overflow-x: hidden;">
    
    <!-- 1. HERO SECTION -->
    <section class="hero-section-premium" id="home">
      <!-- High Quality Immersive Background Image -->
      <div class="hero-bg-overlay" style="background-image: url(\'' . base_url('assets/img/hero/img.jpeg') . '\');"></div>
      <!-- Soft Emerald & Dark Gradient Filter Overlay -->
      <div class="hero-overlay-gradient"></div>
      
      <div class="hero-content">
        <span class="hero-tagline">Pelopor Kelestarian Lingkungan</span>
        <h1>Selamat Datang di<br><span>Proklim Purbayan</span></h1>
        <p class="hero-description">Membangun ketangguhan masyarakat dalam beradaptasi terhadap perubahan iklim melalui inovasi ekologis, ketahanan pangan mandiri, dan integrasi kesehatan masyarakat.</p>
        
        <div class="hero-buttons">
          <a href="#program" class="btn-modern btn-primary"><i class="fas fa-leaf"></i> Telusuri Program</a>
          <a href="#tentang" class="btn-modern btn-outline" style="color: #ffffff; border-color: rgba(255, 255, 255, 0.4);"><i class="fas fa-info-circle"></i> Kenalan Lebih Dekat</a>
        </div>
      </div>
    </section>

    <!-- 2. PROGRAM SECTION -->
    <section class="section" id="program" style="background: #ffffff;">
      <div class="container">
        <div class="section-header">
          <h2>Program Unggulan</h2>
          <p>Kami menjalankan berbagai program terintegrasi untuk menciptakan kampung iklim lestari demi kebaikan generasi masa depan.</p>
        </div>

        <div class="program-grid">
          
          <!-- Card 1: Bank Sampah -->
          <div class="program-card">
            <div class="program-card-img-wrapper">
              <img src="' . base_url('assets/logo/logo bank sampah.jpg') . '" class="program-card-img" alt="Bank Sampah Bunga Raya" />
            </div>
            <div class="program-card-content">
              <div class="program-icon-badge"><i class="fas fa-recycle"></i></div>
              <h3><a href="' . site_url('program/bank-sampah') . '">Bank Sampah</a></h3>
              <p>Membantu pemilahan sampah dari sumbernya secara terorganisir untuk diolah kembali, mengurangi limbah lingkungan sekaligus menghasilkan nilai ekonomi.</p>
              <a href="' . site_url('program/bank-sampah') . '" class="btn-more">Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>

          <!-- Card 2: Kantin Bunga Raya -->
          <div class="program-card">
            <div class="program-card-img-wrapper">
              <img src="' . base_url('assets/logo/logo kantin.jpg') . '" class="program-card-img" alt="Kantin Bunga Raya" />
            </div>
            <div class="program-card-content">
              <div class="program-icon-badge"><i class="fas fa-seedling"></i></div>
              <h3><a href="' . site_url('program/kantin') . '">Kantin Bunga Raya</a></h3>
              <p>Budidaya sayur-mayur hidroponik, pelestarian tanaman obat keluarga, dan pemanfaatan pekarangan pangan guna memperkuat ketahanan pangan warga.</p>
              <a href="' . site_url('program/kantin') . '" class="btn-more">Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>

          <!-- Card 3: Posyandu Purbosari IX -->
          <div class="program-card">
            <div class="program-card-img-wrapper">
              <img src="' . base_url('assets/logo/logo posyandu.jpg') . '" class="program-card-img" alt="Posyandu Purbosari IX" />
            </div>
            <div class="program-card-content">
              <div class="program-icon-badge"><i class="fas fa-baby"></i></div>
              <h3><a href="' . site_url('program/posyandu') . '">Posyandu Purbosari IX</a></h3>
              <p>Pelayanan kesehatan terpadu ramah anak, pemantauan tumbuh kembang balita, imunisasi dasar, serta penyuluhan gizi keluarga secara berkala.</p>
              <a href="' . site_url('program/posyandu') . '" class="btn-more">Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>

          <!-- Card 4: Posbindu-PTM -->
          <div class="program-card">
            <div class="program-card-img-wrapper">
              <img src="' . base_url('assets/logo/logo-posbindu.jpg') . '" class="program-card-img" alt="Posbindu-PTM" />
            </div>
            <div class="program-card-content">
              <div class="program-icon-badge"><i class="fas fa-heartbeat"></i></div>
              <h3><a href="' . site_url('program/posbindu') . '">Posbindu-PTM</a></h3>
              <p>Pos Pembinaan Terpadu untuk skrining dini dan pencegahan faktor risiko penyakit tidak menular pada kelompok usia produktif dan lansia.</p>
              <a href="' . site_url('program/posbindu') . '" class="btn-more">Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 3. TENTANG SECTION (A. Split Dashboard Visual) -->
    <section class="section-alt" id="tentang">
      <div class="container about-split">
        <!-- Visual Left (Main image with overlay stats card) -->
        <div class="about-visual">
          <img src="' . base_url('assets/img/hero/img.jpeg') . '" class="about-img-main" alt="Aksi Penanaman Proklim" />
          <div class="about-stats-card">
            <div class="about-stats-grid">
              <div class="about-stat-item">
                <span class="about-stat-number">5+ Ton</span>
                <span class="about-stat-label">Sampah</span>
              </div>
              <div class="about-stat-item">
                <span class="about-stat-number">100+</span>
                <span class="about-stat-label">Tanaman</span>
              </div>
              <div class="about-stat-item" style="grid-column: span 2; border-top: 1px solid var(--border-light); padding-top: 10px; margin-top: 5px;">
                <span class="about-stat-number">15+</span>
                <span class="about-stat-label">Apresiasi Lestari</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Content Right -->
        <div style="padding-left: 10px;">
          <span class="section-tag" style="color: var(--primary-dark); font-weight: 700; font-size: 0.85rem; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 12px; display: block;">Mengenal Lebih Dekat</span>
          <h2 style="font-size: 2.5rem; margin-bottom: 20px; font-family: var(--font-heading); line-height: 1.25;">Tentang Gerakan<br><span style="color: var(--primary-dark);">Proklim Purbayan</span></h2>
          <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.8; margin-bottom: 24px;">Program Kampung Iklim (ProKlim) merupakan gerakan nasional bentukan Kementerian Lingkungan Hidup dan Kehutanan (KLHK). Di tingkat lokal Purbayan, kami merancang berbagai aksi mitigasi perubahan iklim secara mandiri dan berkelanjutan guna mewujudkan wilayah pemukiman yang tangguh.</p>
          
          <ul class="about-checklist">
            <li><i class="fas fa-check-circle"></i> Edukasi Pemilahan Sampah</li>
            <li><i class="fas fa-check-circle"></i> Program Ketahanan Pangan</li>
            <li><i class="fas fa-check-circle"></i> Layanan Kesehatan Terpadu</li>
            <li><i class="fas fa-check-circle"></i> Aksi Nyata Hemat Energi</li>
          </ul>

          <a href="' . site_url('tentang') . '" class="btn-modern btn-primary"><i class="fas fa-arrow-right"></i> Selengkapnya Tentang Kami</a>
        </div>
      </div>
    </section>

    <!-- 4. STRUKTUR SECTION (B. Interactive Kepengurusan Grid) -->
    <section class="section" id="struktur" style="background: #ffffff;">
      <div class="container">
        <div class="section-header">
          <h2>Struktur Kepengurusan</h2>
          <p>Pilar utama di balik keberhasilan program lingkungan kami adalah kesolidan tim kerja dan partisipasi aktif dari kader penggerak.</p>
        </div>

        <div class="team-grid">
          <!-- Card 1: Ketua -->
          <div class="team-card">
            <div class="team-avatar-wrapper">
              <div class="team-avatar-ring"></div>
              <img src="' . base_url('assets/img/hero/img.jpeg') . '" class="team-avatar" alt="Ketua Pengurus" />
            </div>
            <span class="team-role">Ketua Proklim</span>
            <h3>Bapak Sukardi</h3>
            <p class="team-desc">Memimpin jalannya koordinasi seluruh program ekologi kemasyarakatan.</p>
            <div class="team-socials">
              <a href="#" class="team-social-link"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="team-social-link"><i class="fab fa-instagram"></i></a>
            </div>
          </div>

          <!-- Card 2: Koordinator -->
          <div class="team-card">
            <div class="team-avatar-wrapper">
              <div class="team-avatar-ring"></div>
              <img src="' . base_url('assets/logo/logo bank sampah.jpg') . '" class="team-avatar" alt="Koordinator Bank Sampah" />
            </div>
            <span class="team-role" style="background: var(--accent-light); color: var(--accent-dark);">Koordinator Lapangan</span>
            <h3>Ibu Wuri Handayani</h3>
            <p class="team-desc">Penanggung jawab operasional Bank Sampah Bunga Raya.</p>
            <div class="team-socials">
              <a href="#" class="team-social-link"><i class="fab fa-whatsapp"></i></a>
              <a href="#" class="team-social-link"><i class="fab fa-instagram"></i></a>
            </div>
          </div>

          <!-- Card 3: Kader -->
          <div class="team-card">
            <div class="team-avatar-wrapper">
              <div class="team-avatar-ring"></div>
              <img src="' . base_url('assets/logo/logo posyandu.jpg') . '" class="team-avatar" alt="Kader Posyandu" />
            </div>
            <span class="team-role">Kader Kesehatan</span>
            <h3>Ibu Sri Lestari</h3>
            <p class="team-desc">Menggerakkan posyandu balita dan pemantauan posbindu lansia.</p>
            <div class="team-socials">
              <a href="#" class="team-social-link"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="team-social-link"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>

        <div style="text-align: center; margin-top: 50px;">
          <a href="' . site_url('struktur') . '" class="btn-modern btn-outline"><i class="fas fa-sitemap"></i> Lihat Bagan Struktur Lengkap</a>
        </div>
      </div>
    </section>

    <!-- 5. BERITA SECTION (C. Sleek Grid Cards) -->
    <section class="section-alt" id="berita">
      <div class="container">
        <div class="section-header">
          <h2>Kabar & Berita Terkini</h2>
          <p>Ikuti dokumentasi aksi nyata warga, edukasi lingkungan terbaru, serta pengumuman penting seputar Proklim Purbayan.</p>
        </div>

        <div class="berita-grid">
          ' . $berita_html . '
        </div>

        <div style="text-align: center; margin-top: 50px;">
          <a href="' . site_url('berita') . '" class="btn-modern btn-primary"><i class="fas fa-newspaper"></i> Kunjungi Ruang Berita Lengkap</a>
        </div>
      </div>
    </section>

    <!-- 6. GALERI SECTION (D. Sleek Interactive Zoom Grid) -->
    <section class="section" id="galeri" style="background: #ffffff;">
      <div class="container">
        <div class="section-header">
          <h2>Galeri Kegiatan Aksi</h2>
          <p>Tinjauan dokumentasi visual otentik dari dedikasi gotong royong, kebun sayur, dan kemeriahan anak-anak di posyandu.</p>
        </div>

        <div class="gallery-interactive-grid">
          
          <!-- Item 1 -->
          <div class="gallery-interactive-item" onclick="bukaModal(this.querySelector(\'img\'))" style="cursor: pointer;">
            <img src="' . base_url('assets/img/hero/img.jpeg') . '" alt="Aksi Gotong Royong" />
            <div class="gallery-interactive-overlay">
              <div class="gallery-interactive-icon"><i class="fas fa-search-plus"></i></div>
              <span class="gallery-interactive-title">Aksi Penghijauan RW</span>
              <span class="gallery-interactive-category">Gotong Royong</span>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="gallery-interactive-item" onclick="bukaModal(this.querySelector(\'img\'))" style="cursor: pointer;">
            <img src="' . base_url('assets/logo/logo bank sampah.jpg') . '" alt="Bank Sampah" />
            <div class="gallery-interactive-overlay">
              <div class="gallery-interactive-icon"><i class="fas fa-search-plus"></i></div>
              <span class="gallery-interactive-title">Penimbangan Sampah</span>
              <span class="gallery-interactive-category">Bank Sampah</span>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="gallery-interactive-item" onclick="bukaModal(this.querySelector(\'img\'))" style="cursor: pointer;">
            <img src="' . base_url('assets/logo/logo kantin.jpg') . '" alt="Taman Hidroponik" />
            <div class="gallery-interactive-overlay">
              <div class="gallery-interactive-icon"><i class="fas fa-search-plus"></i></div>
              <span class="gallery-interactive-title">Kebun Hidroponik Lestari</span>
              <span class="gallery-interactive-category">Kantin Bunga Raya</span>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="gallery-interactive-item" onclick="bukaModal(this.querySelector(\'img\'))" style="cursor: pointer;">
            <img src="' . base_url('assets/logo/logo posyandu.jpg') . '" alt="Posyandu" />
            <div class="gallery-interactive-overlay">
              <div class="gallery-interactive-icon"><i class="fas fa-search-plus"></i></div>
              <span class="gallery-interactive-title">Timbang & Imunisasi Balita</span>
              <span class="gallery-interactive-category">Posyandu Purbosari</span>
            </div>
          </div>

          <!-- Item 5 -->
          <div class="gallery-interactive-item" onclick="bukaModal(this.querySelector(\'img\'))" style="cursor: pointer;">
            <img src="' . base_url('assets/logo/logo-posbindu.jpg') . '" alt="Posbindu" />
            <div class="gallery-interactive-overlay">
              <div class="gallery-interactive-icon"><i class="fas fa-search-plus"></i></div>
              <span class="gallery-interactive-title">Pemeriksaan Skrining Lansia</span>
              <span class="gallery-interactive-category">Posbindu PTM</span>
            </div>
          </div>

          <!-- Item 6 -->
          <div class="gallery-interactive-item" onclick="bukaModal(this.querySelector(\'img\'))" style="cursor: pointer;">
            <img src="' . base_url('assets/img/hero/img.jpeg') . '" alt="Penerimaan Apresiasi" />
            <div class="gallery-interactive-overlay">
              <div class="gallery-interactive-icon"><i class="fas fa-search-plus"></i></div>
              <span class="gallery-interactive-title">Penerimaan Penghargaan</span>
              <span class="gallery-interactive-category">Prestasi</span>
            </div>
          </div>

        </div>

        <!-- Glassmorphic Lightbox Modal Popup -->
        <div id="myModal" class="modal" style="display:none; position:fixed; z-index:10000; padding-top:60px; left:0; top:0; width:100%; height:100%; overflow:auto; background-color:rgba(15,23,42,0.95); backdrop-filter:blur(10px); -webkit-backdrop-filter:blur(10px); transition: var(--transition);">
          <span class="close" style="position:absolute; top:20px; right:30px; color:#ffffff; font-size:42px; font-weight:bold; cursor:pointer; transition: var(--transition);">&times;</span>
          <img class="modal-content" id="img01" style="margin:auto; display:block; width:92%; max-width:850px; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); animation: zoom 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);">
          <div id="caption" style="margin:20px auto; display:block; width:80%; max-width:700px; text-align:center; color:#cbd5e1; font-family: var(--font-body); font-weight:600; font-size:1.05rem;">Dokumentasi Foto Kegiatan</div>
        </div>

        <style>
          @keyframes zoom {
            from { transform: scale(0.85); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
          }
        </style>

        <div style="text-align: center; margin-top: 50px;">
          <a href="' . site_url('galeri') . '" class="btn-modern btn-outline"><i class="fas fa-images"></i> Masuki Galeri Interaktif</a>
        </div>
      </div>
    </section>

    <!-- 7. MAPS & CONTACT SECTION -->
    <section class="section" id="kontak" style="background: #ffffff; border-top: 1px solid var(--border-light);">
      <div class="container">
        <div class="section-header">
          <h2>Hubungi Kontak Kami</h2>
          <p>Jika Anda tertarik berkolaborasi, meneliti program kami, berkunjung langsung, atau berpartisipasi dalam program bank sampah, silakan hubungi tim kami.</p>
        </div>

        <div class="contact-block">
          <!-- Google Maps Iframe -->
          <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0089671441096!2d110.77445747418606!3d-7.5740000748136715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a151923da6395%3A0x1673d78197234f0f!2sBank%20Sampah%20Bunga%20Raya!5e0!3m2!1sid!2sid!4v1686552373950!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          
          <!-- Contact Details Info panel -->
          <div class="contact-info-panel">
            <h2>Sekretariat Proklim</h2>
            <p>Kami berpusat di wilayah Sukoharjo, Jawa Tengah. Hubungi kami atau kunjungi langsung sekretariat pada jam operasional.</p>
            
            <div class="contact-details-list">
              <!-- Detail 1: Address -->
              <div class="contact-detail-item">
                <div class="contact-detail-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="contact-detail-text">
                  <h4>Alamat Kantor</h4>
                  <p>Bank Sampah Bunga Raya, Purbayan, Baki, Sukoharjo, Jawa Tengah, Indonesia</p>
                </div>
              </div>
              
              <!-- Detail 2: WhatsApp -->
              <div class="contact-detail-item">
                <div class="contact-detail-icon"><i class="fab fa-whatsapp"></i></div>
                <div class="contact-detail-text">
                  <h4>Layanan Whatsapp</h4>
                  <p>+62 896-8063-8833 (Wuri)</p>
                </div>
              </div>
              
              <!-- Detail 3: Email -->
              <div class="contact-detail-item">
                <div class="contact-detail-icon"><i class="fas fa-envelope"></i></div>
                <div class="contact-detail-text">
                  <h4>Surel Resmi</h4>
                  <p>proklim.purbayan@gmail.com</p>
                </div>
              </div>
            </div>

            <div style="margin-top: 40px;">
              <a href="' . site_url('kontak') . '" class="btn-modern btn-white"><i class="fas fa-paper-plane"></i> Kirim Masukan</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
',
    'extra_js' => '
<script>
  let modal     = document.getElementById("myModal");
  let modalImg  = document.getElementById("img01");
  let caption   = document.getElementById("caption");
  let span      = document.getElementsByClassName("close")[0];

  window.bukaModal = function(img) {
    modal.style.display = "block";
    modalImg.src = img.src;
    
    // Temukan caption secara dinamis dari judul kartu
    let parent = img.closest(".gallery-interactive-item");
    if (parent) {
      let title = parent.querySelector(".gallery-interactive-title");
      if (title) {
        caption.innerText = title.innerText;
      }
    }
  }

  span.onclick = function() { 
    modal.style.display = "none"; 
  }

  modal.onclick = function(e) {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  }
</script>
',
]);
