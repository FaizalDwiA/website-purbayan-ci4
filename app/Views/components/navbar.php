<?php
/**
 * Komponen Navbar Publik (Eco-Modern Premium)
 * @var string $currentPage
 */
$currentPage = $currentPage ?? '';
$seg = current_url(true)->getSegment(1);
$isHome     = ($seg === '');
$isProgram  = in_array($seg, ['program']);
$showSubNav = $isHome || $isProgram;
?>
<style>
/* Animated Hamburger Menu Button (Burger to X Morph) */
.mobile-toggle-btn {
  background: var(--slate-100) !important;
  border: none !important;
  width: 44px !important;
  height: 44px !important;
  border-radius: var(--radius-full) !important;
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 5px !important;
  cursor: pointer !important;
  position: relative !important;
  transition: var(--transition) !important;
  z-index: 10001 !important;
}

.mobile-toggle-btn:hover {
  background: var(--primary-light) !important;
  transform: scale(1.05) !important;
}

.mobile-toggle-btn span {
  display: block !important;
  width: 18px !important;
  height: 2px !important;
  background: var(--text-dark) !important;
  border-radius: var(--radius-full) !important;
  transition: all 0.3s cubic-bezier(0.68, -0.6, 0.32, 1.6) !important;
  pointer-events: none !important; /* Mencegah gangguan klik pada elemen anak */
}

/* Morphing to X state */
.mobile-toggle-btn.open span:nth-child(1) {
  transform: translateY(7px) rotate(45deg) !important;
  background: var(--primary-dark) !important;
}

.mobile-toggle-btn.open span:nth-child(2) {
  opacity: 0 !important;
  transform: translateX(-15px) !important;
}

.mobile-toggle-btn.open span:nth-child(3) {
  transform: translateY(-7px) rotate(-45deg) !important;
  background: var(--primary-dark) !important;
}

/* Floating Circular Chevron Drawer Close Button */
.container-kiri .tombol {
  background: var(--grad-eco) !important;
  position: absolute !important;
  top: 50% !important;
  left: 0 !important; /* Mengapung di perbatasan sisi kiri */
  transform: translateY(-50%) translateX(-100%) !important; /* Muncul penuh ke arah kiri */
  color: #ffffff !important;
  width: 44px !important;
  height: 44px !important;
  border-radius: var(--radius-full) !important;
  display: flex !important;
  justify-content: center !important;
  align-items: center !important;
  font-size: 1.1rem !important;
  box-shadow: -5px 0 15px rgba(0,0,0,0.15) !important;
  cursor: pointer !important;
  transition: var(--transition) !important;
  z-index: 10100 !important;
}

.container-kiri .tombol:hover {
  transform: translateY(-50%) translateX(-100%) scale(1.15) !important; /* Membesar secara halus */
  box-shadow: -5px 0 20px rgba(16, 185, 129, 0.3) !important;
}

/* Active Navigation Indicators */
.top-menu a.active {
  color: var(--primary) !important;
  font-weight: 700 !important;
}

.header-bottom-menu a.active {
  color: var(--primary) !important;
}

.header-bottom-menu a.active::after {
  width: 100% !important;
}
</style>

<!-- Skip Link for Accessibility -->

<a class="skip-link screen-reader-text" href="#wp--skip-link--target" style="position: absolute; left: -9999px; background: var(--primary); color: #fff; padding: 8px; z-index: 99999;">Skip to content</a>

<header class="site-header">
  <!-- Top Utility Menu (Social & Quick Links) -->
  <div class="header-top-menu">
    <div class="container" style="display: flex; justify-content: flex-end; align-items: center; width: 100%;">
      <nav class="top-menu">
        <ul class="wp-block-navigation__container">
          <li><a href="<?= site_url('/') ?>" class="<?= ($currentPage === 'home') ? 'active' : '' ?>"><i class="fas fa-home"></i> Home</a></li>
          <li><a href="<?= site_url('tentang') ?>" class="<?= ($currentPage === 'tentang') ? 'active' : '' ?>"><i class="fas fa-info-circle"></i> Tentang</a></li>
          <li><a href="<?= site_url('program') ?>" class="<?= ($currentPage === 'program') ? 'active' : '' ?>"><i class="fas fa-th-large"></i> Program</a></li>
          <li><a href="<?= site_url('struktur') ?>" class="<?= ($currentPage === 'struktur') ? 'active' : '' ?>"><i class="fas fa-sitemap"></i> Struktur</a></li>
          <li><a href="<?= site_url('berita') ?>" class="<?= ($currentPage === 'berita') ? 'active' : '' ?>"><i class="fas fa-newspaper"></i> Berita</a></li>
          <li><a href="<?= site_url('galeri') ?>" class="<?= ($currentPage === 'galeri') ? 'active' : '' ?>"><i class="fas fa-images"></i> Galeri</a></li>
          <li><a href="<?= site_url('kontak') ?>" class="<?= ($currentPage === 'kontak') ? 'active' : '' ?>"><i class="fas fa-phone-alt"></i> Kontak</a></li>
          <li><a href="<?= site_url('prestasi') ?>" class="<?= ($currentPage === 'prestasi') ? 'active' : '' ?>"><i class="fas fa-trophy"></i> Prestasi</a></li>
          <li><a target="_blank" rel="noopener noreferrer" href="https://instagram.com/bungaraya_purbayan?igshid=MzRlODBiNWFlZA=="><i class="fab fa-instagram"></i> Instagram</a></li>
          <li><a target="_blank" rel="noopener noreferrer" href="https://api.whatsapp.com/send?phone=+6289680638833"><i class="fab fa-whatsapp"></i> Whatsapp</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Main Header Row -->
  <div class="header-main container">
    <!-- Brand Logo -->
    <div class="header-logo">
      <a href="<?= site_url('/') ?>">
        <img src="<?= base_url('assets/logo/logo-panjang.png') ?>" alt="Proklim Purbayan" />
      </a>
    </div>

    <!-- Eco Search Bar -->
    <div class="header-search">
      <form method="get" action="<?= site_url('berita') ?>">
        <div class="wp-block-search__inside-wrapper">
          <input type="search" autocomplete="off" id="search" name="cari" placeholder="Pencarian...." value="<?= esc(request()->getGet('cari') ?? '') ?>" />
          <button type="submit" aria-label="Cari">
            <svg class="search-icon" viewBox="0 0 24 24"><path d="M13 5c-3.3 0-6 2.7-6 6 0 1.4.5 2.7 1.3 3.7l-3.8 3.8 1.1 1.1 3.8-3.8c1 .8 2.3 1.3 3.7 1.3 3.3 0 6-2.7 6-6S16.3 5 13 5zm0 10.5c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5 4.5 2 4.5 4.5-2 4.5-4.5 4.5z"></path></svg>
          </button>
        </div>
      </form>
    </div>

    <!-- Action Icons -->
    <div style="display: flex; align-items: center; gap: 16px;">


      <!-- Drawer Burger Trigger -->
      <?php if ($isHome): ?>
        <button class="mobile-toggle-btn" id="burger-toggle" aria-label="Toggle menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      <?php endif; ?>

    </div>
  </div>

  <?php if ($showSubNav): ?>
    <div class="header-bottom-menu">
      <div class="container">
        <nav class="category-menu">
          <ul class="wp-block-navigation__container">
            <?php if ($isHome): ?>
              <li><a href="#home">Home</a></li>
              <li><a href="#program">Program</a></li>
              <li><a href="#tentang">Tentang</a></li>
              <li><a href="#struktur">Struktur</a></li>
              <li><a href="#berita">Berita</a></li>
              <li><a href="#galeri">Galeri</a></li>
              <li><a href="#kontak">Kontak</a></li>
              <li><a href="#prestasi">Prestasi</a></li>
            <?php elseif ($isProgram): ?>
              <?php $subSeg = current_url(true)->getSegment(2, ''); ?>
              <li><a href="<?= site_url('program/bank-sampah') ?>" class="<?= ($subSeg === 'bank-sampah') ? 'active' : '' ?>">Bank Sampah</a></li>
              <li><a href="<?= site_url('program/kantin') ?>" class="<?= ($subSeg === 'kantin') ? 'active' : '' ?>">Kantin Bunga Raya</a></li>
              <li><a href="<?= site_url('program/posyandu') ?>" class="<?= ($subSeg === 'posyandu') ? 'active' : '' ?>">Posyandu Purbosari IX</a></li>
              <li><a href="<?= site_url('program/posbindu') ?>" class="<?= ($subSeg === 'posbindu') ? 'active' : '' ?>">Posbindu-PTM</a></li>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
    </div>
  <?php endif; ?>
</header>

<!-- Global Drawer Navigation for Mobile & Quick Desktop Actions -->
<?php if ($isHome): ?>
<div class="container-kiri">
  <div class="nav-kiri">
    <div class="tombol"><i class="fas fa-chevron-left"></i></div>
    <div class="row-kiri">
      <ul>
        <li><a href="<?= $isHome ? '#home' : site_url('/') . '#home' ?>"><i class="fas fa-home" style="margin-right: 12px; width: 20px;"></i>Home</a></li>
        <li><a href="<?= $isHome ? '#tentang' : site_url('/') . '#tentang' ?>"><i class="fas fa-info-circle" style="margin-right: 12px; width: 20px;"></i>Tentang</a></li>
        <li><a href="<?= $isHome ? '#program' : site_url('/') . '#program' ?>"><i class="fas fa-th-large" style="margin-right: 12px; width: 20px;"></i>Program</a></li>
        <li><a href="<?= $isHome ? '#struktur' : site_url('/') . '#struktur' ?>"><i class="fas fa-sitemap" style="margin-right: 12px; width: 20px;"></i>Struktur Organisasi</a></li>
        <li><a href="<?= $isHome ? '#berita' : site_url('/') . '#berita' ?>"><i class="fas fa-newspaper" style="margin-right: 12px; width: 20px;"></i>Berita</a></li>
        <li><a href="<?= $isHome ? '#galeri' : site_url('/') . '#galeri' ?>"><i class="fas fa-images" style="margin-right: 12px; width: 20px;"></i>Galeri</a></li>
        <li><a href="<?= $isHome ? '#kontak' : site_url('/') . '#kontak' ?>"><i class="fas fa-phone-alt" style="margin-right: 12px; width: 20px;"></i>Kontak</a></li>
        <li><a href="<?= $isHome ? '#prestasi' : site_url('/') . '#prestasi' ?>"><i class="fas fa-trophy" style="margin-right: 12px; width: 20px;"></i>Prestasi</a></li>
      </ul>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- Back to Top Button -->
<button id="back-to-top" class="back-to-top-btn" aria-label="Back to top">
  <i class="fas fa-arrow-up"></i>
</button>

<!-- Smart Sticky Autohide Header & Smooth Scroll Logic -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // 1. SMART COMPACT STICKY NAVBAR WITH HYSTERESIS (Anti-flicker loop)
  const siteHeader = document.querySelector('.site-header');
  const shrinkThreshold = 200; // Jarak scroll kebawah untuk menyusutkan navbar (compact)
  const expandThreshold = 40;  // Jarak scroll keatas untuk mengembalikan navbar (full)

  window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop < 0) scrollTop = 0;

    // Tambah kelas scrolled saat scroll kebawah melewati batas besar
    // Hapus kelas scrolled saat scroll kembali keatas mendekati puncak halaman
    if (scrollTop > shrinkThreshold) {
      siteHeader.classList.add('scrolled');
    } else if (scrollTop < expandThreshold) {
      siteHeader.classList.remove('scrolled');
    }
  }, { passive: true });


  // 2. BACK TO TOP BUTTON LOGIC
  const backToTopBtn = document.getElementById('back-to-top');

  window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > 400) {
      backToTopBtn.classList.add('show');
    } else {
      backToTopBtn.classList.remove('show');
    }
  }, { passive: true });

  backToTopBtn.addEventListener('click', function() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  // 3. DRAWER TOGGLE LOGIC (Burger & Chevron Close Buttons)
  const burgerToggle = document.getElementById('burger-toggle');
  const drawer = document.querySelector('.container-kiri');
  const drawerCloseBtn = drawer ? drawer.querySelector('.tombol') : null;

  function updateBurgerState() {
    if (drawer && burgerToggle) {
      const chevronIcon = drawer.querySelector('.tombol i');
      if (drawer.classList.contains('buka-tutup')) {
        burgerToggle.classList.add('open');
        if (chevronIcon) {
          chevronIcon.className = 'fas fa-chevron-right'; // Point right when open (to hide)
        }
      } else {
        burgerToggle.classList.remove('open');
        if (chevronIcon) {
          chevronIcon.className = 'fas fa-chevron-left'; // Point left when closed (to open)
        }
      }
    }
  }

  if (burgerToggle && drawer) {
    burgerToggle.addEventListener('click', function(e) {
      e.stopPropagation(); // Hindari pemicu klik luar langsung
      drawer.classList.toggle('buka-tutup');
      updateBurgerState();
    });
  }

  if (drawerCloseBtn && drawer) {
    drawerCloseBtn.addEventListener('click', function(e) {
      e.stopPropagation();
      drawer.classList.toggle('buka-tutup');
      updateBurgerState();
    });
  }


  // 4. GLOBAL SMOOTH SCROLL FOR ALL IN-PAGE HASH ANCHORS (Hero buttons, menus, etc.)
  const smoothLinks = document.querySelectorAll('a[href^="#"]');
  
  smoothLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      
      // Amankan dari querySelector error jika hanya berisi '#' saja
      if (href && href.startsWith('#') && href.length > 1) {
        const targetElement = document.querySelector(href);
        
        if (targetElement) {
          e.preventDefault();
          
          if (drawer) {
            drawer.classList.remove('buka-tutup');
            updateBurgerState();
          }
          
          const headerHeight = siteHeader.offsetHeight;
          const elementPosition = targetElement.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - headerHeight + 5;

          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
        }
      }
    });
  });

  // 5. CLICK OUTSIDE TO CLOSE SIDEBAR DRAWER
  document.addEventListener('click', function(event) {
    if (drawer && drawer.classList.contains('buka-tutup')) {
      // Periksa jika yang diklik bukan bagian dari drawer dan bukan tombol pemicu burger
      if (!drawer.contains(event.target) && !burgerToggle.contains(event.target)) {
        drawer.classList.remove('buka-tutup');
        updateBurgerState();
      }
    }
  });
});
</script>




