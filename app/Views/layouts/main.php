<?php
/**
 * Layout utama halaman publik
 * Gunakan dengan: return view('layouts/main', ['title'=>'...', 'content' => view('...')]);
 *
 * @var string $title
 * @var string $content
 * @var string $currentPage  (optional: 'home', 'berita', etc.)
 */
?>
<!DOCTYPE html>
<html class="yes-js js_active js" lang="id">
<head>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <title><?= esc($title ?? 'Proklim Purbayan') ?></title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="UTF-8" />
  <meta name="description" content="<?= esc($meta_desc ?? 'Proklim Purbayan - Organisasi Program Kampung Iklim untuk keberlanjutan lingkungan hidup di Purbayan, Sukoharjo.') ?>" />
  <link rel="shortcut icon" href="<?= base_url('assets/logo/logo-kotak.jpg') ?>" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome6/css/all.min.css') ?>">
  <!-- WordPress styles (dari legacy) -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style5.min.css') ?>" media="all" />
  <link rel="stylesheet" href="<?= base_url('assets/css/wc-blocks-style.min.css') ?>" media="all" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.min.css') ?>" media="all" />
  <link rel="stylesheet" href="<?= base_url('assets/css/wp-block-button-inline.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/wp-block-buttons-inline.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/view.min.css') ?>" media="all" />
  <link rel="stylesheet" href="<?= base_url('assets/css/wp-block-library-inline.min.css') ?>" media="all" />
  <link rel="stylesheet" href="<?= base_url('assets/css/global-styles-inline.css') ?>" media="all" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style4.min.css') ?>" media="all" />
  <style id="wp-block-navigation-link-inline-css">
    .wp-block-navigation .wp-block-navigation-item__label { overflow-wrap: break-word; word-break: normal; }
    .wp-block-navigation .wp-block-navigation-item__description { display: none; }
  </style>
  <style id="wp-block-navigation-inline-css">
    .wp-block-navigation a:where(:not(.wp-element-button)) { color: inherit; }
  </style>
  <style id="wp-block-group-inline-css">
    .wp-block-group { box-sizing: border-box; }
    :where(.wp-block-group.has-background) { padding: 1.25em 2.375em; }
  </style>
  <!-- Custom Modern Premium Stylesheet -->
  <link rel="stylesheet" href="<?= base_url('assets/css/custom-modern.css') ?>" />
  <?= $extra_css ?? '' ?>
</head>
<body class="<?= esc($body_class ?? 'home page-template page-template-template-blank page page-id-12 wp-custom-logo wp-embed-responsive theme-organic-rialto') ?>" style="overflow-x: hidden;">

  <?= view('components/navbar', ['currentPage' => $currentPage ?? '']) ?>

  <div class="wp-site-blocks">
    <?= $content ?>
    <?= view('components/footer') ?>
  </div>

  <!-- Scripts -->
  <?= view('components/scripts') ?>
  <?= $extra_js ?? '' ?>
</body>
</html>
