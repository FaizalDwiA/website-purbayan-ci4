<?php

require "functions/functions.php";
include("search.php");

?>
<!DOCTYPE html>
<html class="yes-js js_active js" lang="en-US">

<head>
  <title>Proklim Purbayan - Organisasi Lingkungan untuk Keberlanjutan</title>
  <?php include("pages/style/index.php"); ?>
  <style>
    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
      max-width: 40vw;
      margin-left: 0 !important;
    }

    .wp-block-media-text.alignwide.is-stacked-on-mobile {
      background: var(--wp--preset--gradient--lime-light);
      grid-template-columns: 50% auto;
      min-height: 100vh;
    }

    .wp-block-media-text.alignwide.is-stacked-on-mobile figure {
      min-height: 100%;
      padding: 30px 10px;
    }

    .wp-block-media-text__content {
      padding: 0 8%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .icon {
      font-size: 4vw;
      color: #fff;
    }

    .icon.hitam {
      color: #000;
    }

    /* nav kiri */
    .container-kiri {
      position: fixed;
      right: 0;
      background: linear-gradient(135deg, rgb(148, 246, 0), rgb(0, 107, 236) 100%);
      height: 100%;
      top: 0;
      width: 30%;
      border-left: 1px solid #000;
      z-index: 99999;
      transform: translateX(100%);
      transition: transform .5s;
    }

    .container-kiri.buka-tutup {
      transform: translateX(0);
    }

    .nav-kiri {
      position: relative;
    }

    .nav-kiri .row-kiri {
      width: 100%;
      height: 100vh;
    }

    .nav-kiri ul {
      display: flex;
      margin: 20px 10px;
      flex-direction: column;
      margin: 0;
      color: #3a3a3a;
      font-size: 1.3rem;
      font-weight: bold;
      margin-top: 40px;
      text-align: center;
    }

    .nav-kiri a {
      color: #3a3a3a;
      text-decoration: none;
    }

    .nav-kiri li {
      list-style: none;
      list-style-type: none;
      margin: 20px 10px;
      transition: .3s;
    }

    .nav-kiri li:hover {
      transform: scale(1.4);
      color: #000;
    }

    .tombol {
      background-color: #ff0000;
      /* width: 50px; */
      /* height: 50px; */
      position: absolute;
      top: 50%;
      transform: translateY(-50%) translateX(-100%);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0 20px;
      font-size: 3rem;
      font-weight: bold;
      opacity: .4;
      transition: opacity .1s;
    }

    .tombol:hover {
      cursor: pointer;
      opacity: 1;
    }

    /* Animasi */

    @media(min-width: 1000px) {
      .program-sl-kiri {
        transform: translateX(-100%);
        opacity: 0;
      }

      .program-sl-kiri.slide {
        animation: slideKanan 1.5s forwards;
      }

      .program-sl-kanan {
        transform: translateX(100%);
        opacity: 0;
      }

      .program-sl-kanan.slide {
        animation: slideKiri 1.5s forwards;
      }
    }

    @media (max-width: 600px) {
      body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: 100%;
      }

      .wp-block-buttons.is-layout-flex.wp-block-buttons-is-layout-flex {
        display: flex;
        justify-content: center;
      }

      .wp-block-media-text.alignwide.is-stacked-on-mobile {
        grid-template-columns: 1fr;
      }

      .wp-block-media-text__content {
        margin-top: 50px;
      }

      .wp-block-group .is-layout-constrained .wp-block-group-is-layout-constrained {
        text-align: center;
      }

      .icon {
        font-size: 8vw;
      }

      /* nav kiri */
      .container-kiri {
        width: 60%;
      }

      .tombol {
        font-size: 2rem;
        padding: 5px 15px;
      }

      .nav-kiri ul {
        font-size: 1rem;
      }
    }

    @keyframes slideKanan {
      from {
        transform: translateX(-100%);
        opacity: 0;
      }

      to {
        transform: translateX(0);
        opacity: 1;
      }
    }

    @keyframes slideKiri {
      from {
        transform: translateX(100%);
        opacity: 0;
      }

      to {
        transform: translateX(0);
        opacity: 1;
      }
    }
  </style>
</head>

<body class="home page-template page-template-template-blank page page-id-12 wp-custom-logo wp-embed-responsive theme-organic-rialto woocommerce-block-theme-has-button-styles woocommerce-js" style="overflow-x: hidden;">
  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center" style="background-color: #fff;">
    <img class="animation__shake" src="assets/logo/logo-kotak.jpg" alt="AdminLTELogo" style="max-width: 100vw;">
  </div> -->

  <!-- Navbar kiri -->
  <div class="container-kiri">
    <div class="nav-kiri">
      <div class="tombol">&lt;</i></div>
      <div class="row-kiri">
        <ul>
          <a href="#home">
            <li>Home</li>
          </a>
          <a href="#program">
            <li>Program</li>
          </a>
          <a href="#tentang">
            <li>Tentang</li>
          </a>
          <a href="#struktur">
            <li>Struktur Organisasi</li>
          </a>
          <a href="#berita">
            <li>Berita</li>
          </a>
          <a href="#galeri">
            <li>Galeri</li>
          </a>
          <a href="#kontak">
            <li>kontak</li>
          </a>
          <a href="#prestasi">
            <li>Prestasi</li>
          </a>
        </ul>
      </div>
    </div>
  </div>

  <a class="skip-link screen-reader-text" href="#wp--skip-link--target">Skip to content</a>
  <div class="wp-site-blocks">
    <?php include("navbar.php"); ?>

    <main class="wp-block-group alignfull site-main is-layout-constrained wp-block-group-is-layout-constrained" id="wp--skip-link--target">
      <div class="entry-content alignfull wp-block-post-content is-layout-constrained wp-block-post-content-is-layout-constrained">
        <div class="wp-block-cover alignfull is-light clip-angle-bottom-right" style="min-height: 620px;background: var(--wp--preset--gradient--lime-light);" id="home">
          <span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="
                background-image: url('assets/img/hero/img.jpeg');
                background-size: cover;
                background-position-y: -20px;
                background-position-x: center;
                filter: opacity(.3);
              "></span>
          <div class="wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow">
            <hr class="wp-block-separator has-text-color has-pale-pink-color has-css-opacity has-lime-light-gradient-background has-background" />

            <h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-huge-font-size">
              <strong>Proklim Purbayan</strong>
            </h1>

            <div class="wp-block-buttons is-horizontal is-content-justification-center is-layout-flex wp-container-16 wp-block-buttons-is-layout-flex">
              <div class="wp-block-button is-style-outline">
                <a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="#tentang">Kenalan lebih dekat dengan Proklim Purbayan</a>
              </div>
            </div>
          </div>
        </div>

        <div class="wp-block-group alignwide is-layout-flow wp-block-group-is-layout-flow" id="program">
          <div style="height: 60px" aria-hidden="true" class="wp-block-spacer"></div>
          <a href="program.php" style="text-decoration: none;">
            <figure class="wp-block-image aligncenter size-large is-resized">
              <!-- <img decoding="async" loading="lazy" src="assets/icon-news.png" alt="" class="wp-image-1813" srcset="
                  assets/icon-news.png         180w,
                  assets/icon-news-150x150.png 150w
                " sizes="(max-width: 36px) 100vw, 36px" width="36" height="36" /> -->
              <i class="icon hitam fas fa-users"></i>
            </figure>

            <h2 class="wp-block-heading has-text-align-center has-black-color has-text-color">
              Program
            </h2>
          </a>

          <p class="has-text-align-center has-text-color" style="color: #999999">
            Proklim Purbayan menjalankan 3 program kegiatan yaitu kantin bunga raya, bank sampah bunga raya dan posyandu purbosari XI. Program yang sangat bermanfaat serta memberikan dampak positif bagi masyarakat. Untuk lebih detailnya kunjungi menu program kami dibawah ini!
          </p>

          <div class="wp-block-query is-layout-flow wp-block-query-is-layout-flow">
            <ul class="is-flex-container columns-2 wp-block-post-template is-layout-flow wp-block-post-template-is-layout-flow">
              <li class="wp-block-post post-1966 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-featured tag-secrets tag-tips tag-vendors">
                <figure class="alignwide wp-block-post-featured-image program-sl-kiri">
                  <a href="bank-sampah.php" target="_self"><img loading="lazy" src="assets/logo/logo bank sampah.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Secrets From Top Performing Vendors" decoding="async" style="object-fit: cover" width="2400" height="1200" /></a>
                </figure>

                <h4 style="margin-bottom: 12px" class="wp-block-post-title has-medium-font-size">
                  <a href="bank-sampah.php" target="_self">BANK SAMPAH</a>
                </h4>

                <div style="color: #666666; margin-bottom: 12px; margin-top: 0px" class="has-text-color wp-block-post-excerpt has-normal-font-size">
                  <p class="wp-block-post-excerpt__excerpt">
                    Bank sampah merupakan bank yang digunakan mengumpulkan sampah yang telah dipilah dipilih dan dikumpulkan di suatu tempat kemudian dijadikan uang dan tempat koperasi
                  </p>
                </div>

                <a class="wp-block-read-more" href="bank-sampah.php" target="_self">Baca Selengkapnya<span class="screen-reader-text">
                    : Bank Sampah</span></a>
              </li>
              <li class="wp-block-post post-899 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-featured tag-selling-online tag-services tag-woocommerce">
                <figure class="alignwide wp-block-post-featured-image program-sl-kanan">
                  <a href="kantin.php" target="_self"><img src="assets/logo/logo kantin.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="How To Sell Your Artwork Online" decoding="async" loading="lazy" style="object-fit: cover" width="2400" height="1200" /></a>
                </figure>

                <h4 style="margin-bottom: 12px" class="wp-block-post-title has-medium-font-size">
                  <a href="kantin.php" target="_self">KANTIN BUNGA RAYA</a>
                </h4>

                <div style="color: #666666; margin-bottom: 12px; margin-top: 0px" class="has-text-color wp-block-post-excerpt has-normal-font-size">
                  <p class="wp-block-post-excerpt__excerpt">
                    Program Kantin Bunga Raya kami lebih fokus pada produksi dan pelestarian tanaman, sehingga memudahkan masyarakat dalam mengonsumsinya. Kami menawarkan berbagai tanaman yang menarik dan bermanfaat. Untuk mengetahui tanaman apa saja yang kami jalankan, silakan baca selengkapnya di halaman terkait.
                  </p>
                </div>

                <a class="wp-block-read-more" href="kantin.php" target="_self">Baca Selengkapnya<span class="screen-reader-text">: How To Sell Your Artwork Online</span></a>
              </li>
              <li class="wp-block-post post-277 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-featured tag-creative tag-organization tag-studio">
                <figure class="alignwide wp-block-post-featured-image program-sl-kiri">
                  <a href="posyandu.php" target="_self"><img src="assets/logo/logo posyandu.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Prepare Your Studio For Productivity" decoding="async" loading="lazy" style="object-fit: cover" width="2400" height="1200" /></a>
                </figure>

                <h4 style="margin-bottom: 12px" class="wp-block-post-title has-medium-font-size">
                  <a href="posyandu.php" target="_self">POSYANDU PURBOSARI IX</a>
                </h4>

                <div style="color: #666666; margin-bottom: 12px; margin-top: 0px" class="has-text-color wp-block-post-excerpt has-normal-font-size">
                  <p class="wp-block-post-excerpt__excerpt">
                    Posyandu merupakan perpanjangan tangan puskesmas yang memberikan pelayanan dan pemantauan kesehatan yang dilakukan secara terpadu.
                  </p>
                </div>

                <a class="wp-block-read-more" href="posyandu.php" target="_self">Baca Selengkapnya<span class="screen-reader-text">: Posyandu</span></a>
              </li>
              <li class="wp-block-post post-277 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-featured tag-creative tag-organization tag-studio">
                <figure class="alignwide wp-block-post-featured-image program-sl-kanan">
                  <a href="posbindu.php" target="_self"><img src="assets/logo/logo-posbindu.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Prepare Your Studio For Productivity" decoding="async" loading="lazy" style="object-fit: cover" width="2400" height="1200" /></a>
                </figure>

                <h4 style="margin-bottom: 12px" class="wp-block-post-title has-medium-font-size">
                  <a href="posbindu.php" target="_self">POSBINDU-PTM</a>
                </h4>

                <div style="color: #666666; margin-bottom: 12px; margin-top: 0px" class="has-text-color wp-block-post-excerpt has-normal-font-size">
                  <p class="wp-block-post-excerpt__excerpt">
                    POSBINDU-PTM Posbindu PTM merupakan singkatan dari Pos Pelayanan Terpadu Penyakit Tidak Menular. Program ini merupakan bagian dari upaya pemerintah dalam mengatasi masalah kesehatan masyarakat, terutama
                    terkait dengan penyakit tidak menular seperti diabetes, hipertensi, kolesterol, dan obesitas. posbindu-PTM Bunga Raya merupakan suatu program yang amat muda karna program ini baru saja dijalankan tetapi program ini tidak kalah saing dengan program lain..
                  </p>
                </div>

                <a class="wp-block-read-more" href="posbindu.php" target="_self">Baca Selengkapnya<span class="screen-reader-text">: POSBINDU-PTM</span></a>
              </li>
            </ul>
          </div>

          <div style="height: 60px" aria-hidden="true" class="wp-block-spacer"></div>
        </div>

        <div style="height: 60px" aria-hidden="true" class="wp-block-spacer"></div>

        <div class="wp-block-cover alignfull has-lime-light-gradient-background has-background" id="tentang">
          <!-- <span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color: #1d304b"></span> -->
          <!-- <img decoding="async" loading="lazy" class="wp-block-cover__image-background wp-image-1798" alt="" src="assets/logo/logo-panjang.png" style="object-position: 70% 22%" data-object-fit="cover" data-object-position="70% 22%" sizes="(max-width: 2400px) 100vw, 2400px" width="2400" height="1200" /> -->
          <div class="wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow">
            <div class="wp-block-group is-layout-constrained wp-container-35 wp-block-group-is-layout-constrained">
              <i class="icon  fas fa-address-card"></i>
              <h2 class="wp-block-heading has-white-color has-text-color">
                <strong>Tentang</strong>
              </h2>

              <p class="has-white-color has-text-color">
                Proklim atau disebut juga Program Kampung Iklim yaitu program yang dilingkup nasional yang dikelola oleh kementrian lingkungan hidup dan Kehutanan dalam rangka meningkatkan ketertiban masyarakat dalam rangka meningkatkan
                ketertiban masyarakat...
              </p>

              <div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
                <div class="wp-block-button">
                  <a class="wp-block-button__link wp-element-button" href="tentang.php">Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="wp-block-group alignwide is-layout-flow wp-block-group-is-layout-flow" id="struktur">
          <div style="height: 60px" aria-hidden="true" class="wp-block-spacer"></div>

          <figure class="wp-block-image aligncenter size-large is-resized">
            <i class="icon hitam fa-solid fa-network-wired"></i>
          </figure>

          <h2 class="wp-block-heading has-text-align-center has-black-color has-text-color">
            Struktur Anggota
          </h2>

          <p class="has-text-align-center has-text-color" style="color: #999999">
            Ingin tahu siapa yang menjalankan organisasi kami? Temukan struktur anggota lengkap di halaman kami.

            <br><br>

            Klik tombol di bawah ini untuk memasuki <b>halaman struktur anggota</b> Proklim Purbayan sekarang!
          </p>
          <div style="display: flex;justify-content: center; margin-bottom: 30px;">
            <div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
              <div class="wp-block-button">
                <a class="wp-block-button__link wp-element-button" href="struktur.php">Struktur Organisasi</a>
              </div>
            </div>
          </div>

        </div>

        <div style="height: 60px" aria-hidden="true" class="wp-block-spacer"></div>

        <div class="wp-block-cover alignfull has-lime-light-gradient-background has-background" id="berita">
          <!-- <span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color: #1d304b"></span> -->
          <!-- <img decoding="async" loading="lazy" class="wp-block-cover__image-background wp-image-1798" alt="" src="assets/logo/logo-panjang.png" style="object-position: 70% 22%" data-object-fit="cover" data-object-position="70% 22%" sizes="(max-width: 2400px) 100vw, 2400px" width="2400" height="1200" /> -->
          <div class="wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow">
            <div class="wp-block-group is-layout-constrained wp-container-35 wp-block-group-is-layout-constrained">
              <i class="icon fa-regular fa-newspaper"></i>

              <h2 class="wp-block-heading has-white-color has-text-color">
                <strong>Berita</strong>
              </h2>

              <p class="has-white-color has-text-color">
                Temukan berita terkini yang menarik terkait Proklim Purbayan!

                <br><br>

                Klik tombol di bawah ini untuk memasuki <b>halaman berita</b> Proklim Purbayan sekarang!
              </p>

              <div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
                <div class="wp-block-button">
                  <a class="wp-block-button__link wp-element-button" href="berita.php">Berita</a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="wp-block-group alignwide is-layout-flow wp-block-group-is-layout-flow" id="galeri">
          <div style="height: 60px" aria-hidden="true" class="wp-block-spacer"></div>

          <figure class="wp-block-image aligncenter size-large is-resized">
            <!-- <img decoding="async" loading="lazy" src="assets/icon-picture.png" alt="" class="wp-image-1814" srcset="
                  assets/icon-picture.png         180w,
                  assets/icon-picture-150x150.png 150w
                " sizes="(max-width: 36px) 100vw, 36px" width="36" height="36" /> -->
            <i class="icon hitam fa-regular fa-images"></i>
          </figure>

          <h2 class="wp-block-heading has-text-align-center has-black-color has-text-color">
            Galeri
          </h2>

          <p class="has-text-align-center has-text-color" style="color: #999999">
            Nikmati perjalanan visual kami di dunia lingkungan melalui galeri foto dan video inspiratif kami.<br><br>
            Klik tombol di bawah ini untuk memasuki <b>halaman galeri</b> Proklim Purbayan sekarang!
          </p>
          <div style="display: flex;justify-content: center; margin-bottom: 30px;">
            <div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
              <div class="wp-block-button">
                <a class="wp-block-button__link wp-element-button" href="galeri.php">Galeri</a>
              </div>
            </div>
          </div>

        </div>

        <div style="height: 60px" aria-hidden="true" class="wp-block-spacer"></div>

        <div class="wp-block-media-text alignwide is-stacked-on-mobile rounded-corners-small has-background" id="kontak">

          <figure class="wp-block-media-text__media">
            <iframe decoding="async" loading="lazy" class="wp-image-1655 size-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0089671441096!2d110.77445747418606!3d-7.5740000748136715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a151923da6395%3A0x1673d78197234f0f!2sBank%20Sampah%20Bunga%20Raya!5e0!3m2!1sid!2sid!4v1686552373950!5m2!1sid!2sid" width="1000" height="500" style="min-height: 100%; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <img decoding="async" loading="lazy" src="assets/artist-01-scaled-1.jpg" alt="" class="wp-image-1655 size-full" width="2560" height="2560" style="height: 100%;" /> -->
          </figure>
          <div class="wp-block-media-text__content">
            <div class="wp-block-group is-layout-constrained wp-block-group-is-layout-constrained" style="
                  padding-top: 24px;
                  padding-right: 24px;
                  padding-bottom: 24px;
                  padding-left: 24px;
                ">
              <i class="icon fas fa-address-book"></i>
              <h2 class="wp-block-heading has-white-color has-text-color">
                <strong>Kontak</strong>
              </h2>

              <p class="has-white-color has-text-color">
                Kunjungi <strong>halaman Kontak</strong> kami untuk menghubungi tim kami. Kami siap menjawab pertanyaan Anda, menerima masukan yang berharga, atau menjalin kerjasama dalam menjaga kelestarian sumber daya alam.
              </p>

              <div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
                <div class="wp-block-button is-style-outline">
                  <a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="kontak.php">BUKA KONTAK</a>
                </div>
              </div>
            </div>
          </div>

          <div style="height: 60px" aria-hidden="true" class="wp-block-spacer"></div>
        </div>

        <div class="wp-block-group alignwide is-layout-flow wp-block-group-is-layout-flow" id="prestasi">
          <div style="height: 60px" aria-hidden="true" class="wp-block-spacer"></div>

          <figure class="wp-block-image aligncenter size-large is-resized">
            <!-- <img decoding="async" loading="lazy" src="assets/icon-picture.png" alt="" class="wp-image-1814" srcset="
                  assets/icon-picture.png         180w,
                  assets/icon-picture-150x150.png 150w
                " sizes="(max-width: 36px) 100vw, 36px" width="36" height="36" /> -->
            <!-- <i class="icon hitam fa-regular fa-images"></i> -->
            <i class="icon hitam fa-solid fa-trophy"></i>
          </figure>

          <h2 class="wp-block-heading has-text-align-center has-black-color has-text-color">
            Prestasi
          </h2>

          <p class="has-text-align-center has-text-color" style="color: #999999">
            Saksikan Prestasi Terbaik Kami: Menembus Batas dan Menciptakan Perubahan Positif di Bidang Perlindungan Iklim<br><br>
            Klik tombol di bawah ini untuk memasuki <b>halaman prestasi</b> Proklim Purbayan sekarang!
          </p>
          <div style="display: flex;justify-content: center; margin-bottom: 30px;">
            <div class="wp-block-buttons is-layout-flex wp-block-buttons-is-layout-flex">
              <div class="wp-block-button">
                <a class="wp-block-button__link wp-element-button" href="prestasi.php">Prestasi</a>
              </div>
            </div>
          </div>
        </div>

        <div style="height: 60px" aria-hidden="true" class="wp-block-spacer"></div>
      </div>
    </main>

    <?php include("pages/footer/index.php"); ?>
  </div>

  <script>
    let tombol = document.querySelector(".container-kiri .tombol");
    let conKiri = document.querySelector(".container-kiri");
    tombol.addEventListener("click", function() {
      conKiri.classList.toggle("buka-tutup");
      if (conKiri.classList.contains("buka-tutup")) {
        tombol.textContent = ">";
      } else {
        tombol.textContent = "<";
      }
    });
  </script>

  <script>
    let program_sl_kiri = document.querySelectorAll(".program-sl-kiri");
    let program_sl_kanan = document.querySelectorAll(".program-sl-kanan");

    window.addEventListener("scroll", function(e) {
      program_sl_kanan.forEach(e => slideProgram(e));
      program_sl_kiri.forEach(e => slideProgram(e));

      function slideProgram(el) {
        if (window.scrollY >= el.scrollHeight + 300 && window.scrollY <= el.scrollHeight + 2000) {
          el.classList.add("slide");
        } else {
          el.classList.remove("slide");
        }

        if (window.scrollY >= el.scrollHeight + 300 && window.scrollY <= el.scrollHeight + 2000) {
          el.classList.add("slide");
        } else {
          el.classList.remove("slide");
        }
      }
    });
  </script>
  <?php include("pages/script/index.php"); ?>
</body>

</html>