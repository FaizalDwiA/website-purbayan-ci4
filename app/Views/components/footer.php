<footer class="footer-premium">
  <div class="container">
    <div class="footer-grid">
      <!-- Column 1: About & Socials -->
      <div class="footer-col footer-about">
        <img src="<?= base_url('assets/logo/logo-panjang.png') ?>" alt="Proklim Purbayan" class="footer-logo" style="filter: brightness(0) invert(1); margin-bottom: 20px; max-height: 38px;" />
        <p>Proklim Purbayan adalah organisasi berbasis masyarakat di tingkat rukun warga (RW) yang berdedikasi menjaga ketahanan iklim, pelestarian lingkungan hidup, dan peningkatan kesejahteraan sosial secara berkelanjutan.</p>
        <div class="footer-socials">
          <a target="_blank" rel="noopener noreferrer" href="https://instagram.com/bungaraya_purbayan?igshid=MzRlODBiNWFlZA==" class="footer-social-btn" title="Instagram">
            <i class="fab fa-instagram"></i>
          </a>
          <a target="_blank" rel="noopener noreferrer" href="https://api.whatsapp.com/send?phone=+6289680638833" class="footer-social-btn" title="Whatsapp">
            <i class="fab fa-whatsapp"></i>
          </a>
          <a target="_blank" rel="noopener noreferrer" href="https://goo.gl/maps/iRfdiai746TTdCos9" class="footer-social-btn" title="Google Maps">
            <i class="fas fa-map-marked-alt"></i>
          </a>
        </div>
      </div>

      <!-- Column 2: Program Links -->
      <div class="footer-col">
        <h3>Program Kami</h3>
        <ul class="footer-links">
          <li><a href="<?= site_url('program/bank-sampah') ?>">Bank Sampah Bunga Raya</a></li>
          <li><a href="<?= site_url('program/kantin') ?>">Kantin Bunga Raya</a></li>
          <li><a href="<?= site_url('program/posyandu') ?>">Posyandu Purbosari IX</a></li>
          <li><a href="<?= site_url('program/posbindu') ?>">Posbindu-PTM</a></li>
        </ul>
      </div>

      <!-- Column 3: Site Navigation -->
      <div class="footer-col">
        <h3>Tautan Cepat</h3>
        <ul class="footer-links">
          <li><a href="<?= site_url('/') ?>">Beranda / Home</a></li>
          <li><a href="<?= site_url('tentang') ?>">Tentang Kami</a></li>
          <li><a href="<?= site_url('berita') ?>">Kabar & Berita</a></li>
          <li><a href="<?= site_url('galeri') ?>">Galeri Kegiatan</a></li>
          <li><a href="<?= site_url('prestasi') ?>">Prestasi Kami</a></li>
          <li><a href="<?= site_url('kontak') ?>">Hubungi Kontak</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Footer Bottom (Copyright Ribbon) -->
  <div class="footer-bottom">
    <div class="container footer-bottom-content">
      <p>&copy; <?= date('Y') ?> <b>Proklim Purbayan</b>. Hak Cipta Dilindungi Undang-Undang.</p>
      <p style="font-size: 0.8rem; color: #64748b;">Kampung Iklim Lestari &bull; Sukoharjo, Indonesia</p>
    </div>
  </div>
</footer>
