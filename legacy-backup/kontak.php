<?php

require "functions/functions.php";
include("search.php");
$kontak = tampil("SELECT nomor, email, sosmed FROM kontak")[0];

?>
<!DOCTYPE html>
<html class="yes-js js_active js" lang="en-US">

<head>
  <title>Kontak - Proklim Purbayan</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta charset="UTF-8" />
  <meta name="description" content="Hubungi Proklim Purbayan untuk pertanyaan, saran, atau kerjasama dalam menjaga kelestarian lingkungan. Temukan informasi kontak kami dan jangan ragu untuk menghubungi kami melalui whaatsap atau alamat email.">
  <?php include("pages/style/index.php"); ?>
</head>

<body class="home page-template page-template-template-blank page page-id-12 wp-custom-logo wp-embed-responsive theme-organic-rialto woocommerce-block-theme-has-button-styles woocommerce-js dokan-theme-organic-rialto">
  <a class="skip-link screen-reader-text" href="#wp--skip-link--target">Skip to content</a>
  <div class="wp-site-blocks">
    <?php include("navbar.php"); ?>

    <main class="wp-block-group alignfull site-main is-layout-constrained wp-block-group-is-layout-constrained" id="wp--skip-link--target">
      <section class="alignfull site-banner wp-block-template-part">
        <div class="wp-block-group has-lime-light-gradient-background has-background is-layout-constrained wp-block-group-is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
          <div class="wp-block-cover alignfull is-light" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
            <!-- <img src="Julia%20Chavez%20%E2%80%93%20Rialto_files/portrait-09.jpg" class="wp-block-cover__image-background wp-post-image" alt="" decoding="async" loading="lazy" data-object-fit="cover" width="1800" height="1800"> -->
            <div class="wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow">
              <h2 style="font-style:normal;font-weight:600;" class="has-text-align-center has-text-color has-white-color wp-block-post-title has-huge-font-size">Kontak</h2>
            </div>
          </div>
        </div>
      </section>

      <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>

      <div class="entry-content alignfull wp-block-post-content is-layout-constrained wp-block-post-content-is-layout-constrained">
        <h2>Hubungi Kami</h2>

        <p>Terima kasih atas minat Anda untuk menghubungi Proklim Purbayan. Kami sangat senang mendengar dari Anda dan siap menjawab pertanyaan atau memberikan informasi yang Anda butuhkan. Silakan gunakan salah satu metode kontak di bawah ini untuk menghubungi kami:</p>

        <hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide">


        <h3>Alamat:</h3>
        <p>
          <!-- Perumahan Kelapa Gading, RT.03/ RW.11, Dusun I, Purbayan, Kec. Baki, Kabupaten Sukoharjo, Jawa tengah 57556 -->
          Perumahan Kelapa Gading, RT.03/ RW.11, Dusun I,<br />
          Purbayan, Kec. Baki, Kabupaten Sukoharjo, Jawa tengah<br />
          Kode Pos: 57556
        </p>

        <hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide">

        <h3>Telepon:</h3>

        <p><?= $kontak["nomor"]; ?></p>

        <hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide">

        <h3>Email:</h3>

        <p><?= $kontak["email"]; ?></p>

        <hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide">

        <h3>Media Sosial:</h3>

        <p>Instagram: <a href="<?= $kontak["sosmed"]; ?>"><?= $kontak["sosmed"]; ?></a></p>

        <hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide">

        <h3>Peta</h3>

        <figure class="wp-block-media-text__media">
          <iframe decoding="async" loading="lazy" class="wp-image-1655 size-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0089671441096!2d110.77445747418606!3d-7.5740000748136715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a151923da6395%3A0x1673d78197234f0f!2sBank%20Sampah%20Bunga%20Raya!5e0!3m2!1sid!2sid!4v1686552373950!5m2!1sid!2sid" width="1000" height="500" style="min-height: 100%; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </figure>

        <p>Link menuju maps : <a href="https://goo.gl/maps/iRfdiai746TTdCos9" target="_blank" rel="noopener noreferrer">https://goo.gl/maps/iRfdiai746TTdCos9</a></p>

        <hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide">

        <p>Terima kasih atas minat dan dukungan Anda terhadap Proklim Purbayan. Kami berkomitmen untuk melindungi dan melestarikan lingkungan hidup serta menjaga keberlanjutan alam. Mari bersama-sama menciptakan perubahan positif!</p>

        <div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>

        <p><b>Tim Proklim Purbayan</b></p>

        <div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>

      </div>
    </main>

    <?php include("pages/footer/index.php"); ?>
  </div>

  <?php include("pages/script/index.php"); ?>

  <img src="assets/g.gif" alt="" id="wpstats" width="6" height="5" />
</body>

</html>