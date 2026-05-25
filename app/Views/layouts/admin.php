<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= esc($title ?? 'Admin - Proklim Purbayan') ?></title>
  <!-- Theme style AdminLTE -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/adminLTE/css/adminlte.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome6/css/all.min.css') ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
  <style>
    .card-header { display: flex; justify-content: space-between; width: 100%; align-items: center; }
    .card-header::after { content: none; }
    .tampil-gambar { width: 10vw; max-height: 80px; object-fit: cover; }
  </style>
  <?= $extra_css ?? '' ?>
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar Top -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= base_url('/') ?>" class="nav-link" target="_blank">Lihat Website</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <span class="nav-link">Halo, <strong><?= session('user') ?></strong></span>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('logout') ?>" class="nav-link text-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </li>
      </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="<?= base_url('admin') ?>" class="brand-link">
        <img src="<?= base_url('assets/logo/logo-kotak.jpg') ?>" alt="Proklim Purbayan" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Proklim Purbayan</span>
      </a>
      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
            <li class="nav-item">
              <a href="<?= base_url('admin') ?>" class="nav-link <?= (current_url(true)->getSegment(1) == 'admin' && current_url(true)->getTotalSegments() == 1) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/berita') ?>" class="nav-link <?= str_contains(current_url(), 'admin/berita') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-newspaper"></i>
                <p>Berita</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/gambar') ?>" class="nav-link <?= str_contains(current_url(), 'admin/gambar') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-images"></i>
                <p>Gambar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/kontak') ?>" class="nav-link <?= str_contains(current_url(), 'admin/kontak') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-address-book"></i>
                <p>Kontak</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/prestasi') ?>" class="nav-link <?= str_contains(current_url(), 'admin/prestasi') ? 'active' : '' ?>">
                <i class="nav-icon fas fa-trophy"></i>
                <p>Prestasi</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
      <?php if (session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
          <?= session('success') ?>
          <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
        </div>
      <?php endif; ?>
      <?php if (session()->has('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
          <?= session('error') ?>
          <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
        </div>
      <?php endif; ?>

      <?= $content ?>
    </div>

    <footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="<?= base_url('/') ?>">Proklim Purbayan</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block"><b>Version</b> 2.0 (CI4)</div>
    </footer>

    <aside class="control-sidebar control-sidebar-dark"></aside>
  </div>

  <!-- jQuery -->
  <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
  <!-- DataTables -->
  <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/jszip/jszip.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/pdfmake/pdfmake.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/pdfmake/vfs_fonts.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/plugins/adminLTE/js/adminlte.min.js') ?>"></script>
  <!-- bs-custom-file-input -->
  <script src="<?= base_url('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') ?>"></script>
  <script>
    $(function () {
      bsCustomFileInput.init();
    });
  </script>
  <?= $extra_js ?? '' ?>
</body>
</html>
