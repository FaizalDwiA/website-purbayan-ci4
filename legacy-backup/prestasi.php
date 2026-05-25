<?php
require "functions/functions.php";
include("search.php");

$prestasi = tampil("SELECT * FROM prestasi");
?>
<!DOCTYPE html>
<html class="yes-js js_active js" lang="en-US">

<head>
  <title>Prestasi - Proklim Purbayan</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta charset="UTF-8" />
  <?php include("pages/style/index.php"); ?>
  <style>
    .wp-block-gallery.has-nested-images.columns-default.is-cropped.is-layout-flex.wp-block-gallery-is-layout-flex {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
    }

    .wp-block-image {
      width: 100%;
      height: 90%;
      color: #000;
      text-align: center;
      box-shadow: 0 0 5px 5px #eaeaea;
      position: relative;
      padding-bottom: 50px;
    }

    .wp-block-image h2 {
      padding: 10px;
      font-size: 20px;
      font-weight: bold;
    }

    .wp-block-image p {
      color: #0e8200;
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
    }

    @media(min-width: 1000px) {
      .wp-block-separator {
        display: none;
      }
    }

    @media(max-width: 600px) {
      .wp-block-gallery.has-nested-images.columns-default.is-cropped.is-layout-flex.wp-block-gallery-is-layout-flex {
        grid-template-columns: 1fr;
      }

      .wp-block-image {
        box-shadow: none;
        height: 100%;
      }

      .wp-block-image p {
        bottom: 40px;
      }
    }
  </style>
</head>

<body class="home page-template page-template-template-blank page page-id-12 wp-custom-logo wp-embed-responsive theme-organic-rialto woocommerce-block-theme-has-button-styles woocommerce-js dokan-theme-organic-rialto">
  <a class="skip-link screen-reader-text" href="#wp--skip-link--target">Skip to content</a>
  <div class="wp-site-blocks">
    <?php include("navbar.php"); ?>

    <main class="wp-block-group alignfull site-main is-layout-constrained wp-block-group-is-layout-constrained" id="wp--skip-link--target">
      <section class="alignfull site-banner wp-block-template-part">
        <div class="wp-block-group has-lime-light-gradient-background has-background is-layout-constrained wp-block-group-is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
          <div class="wp-block-cover alignfull is-light" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img src="Julia%20Chavez%20%E2%80%93%20Rialto_files/portrait-09.jpg" class="wp-block-cover__image-background wp-post-image" alt="" decoding="async" loading="lazy" data-object-fit="cover" width="1800" height="1800">
            <div class="wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow">
              <h2 style="font-style:normal;font-weight:600;" class="has-text-align-center has-text-color has-white-color wp-block-post-title has-huge-font-size">Prestasi</h2>
            </div>
          </div>
        </div>
      </section>

      <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>

      <!-- <hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide" style="max-width: 100vw; border: 1px solid #00d084;"> -->

      <div class="entry-content alignfull wp-block-post-content is-layout-constrained wp-block-post-content-is-layout-constrained">
        <figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-22 is-layout-flex wp-block-gallery-is-layout-flex" style=" margin-top: 80px;">
          <?php foreach ($prestasi as $p) : ?>

            <figure class="wp-block-image size-large">
              <h2><?= $p["prestasi_judul"]; ?></h2>
              <img decoding="async" data-id="1828" onclick="bukaModal(this)" src="assets/img/upload/<?= $p["prestasi_gambar"]; ?>" alt="" class="wp-image-1828">
              <?php
              if ($p["prestasi_kategori"] == "Madya") {
                $tingkat = "Kabupaten";
              } else {
                $tingkat = "Nasional";
              }
              ?>
              <p>TIngkat : <?= $tingkat; ?></p>
            </figure>
            <hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide" style="max-width: 100vw; border: 1px solid #00d084;  position: relative;top: -70px;">
          <?php endforeach; ?>

        </figure>

        <div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>

      </div>
    </main>

    <?php include("pages/footer/index.php"); ?>
  </div>

  <?php include("pages/script/index.php"); ?>
</body>

</html>