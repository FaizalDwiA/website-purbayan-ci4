<?php
/**
 * View: auth/login.php
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= esc($title) ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome6/css/all.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/plugins/adminLTE/css/adminlte.min.css') ?>" />
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <h1>Login</h1>
        <p class="text-muted">Admin Proklim Purbayan</p>
      </div>
      <div class="card-body">
        <?php if (session()->has('error')): ?>
          <div class="alert alert-danger"><?= session('error') ?></div>
        <?php endif; ?>
        <?php if (session()->has('success')): ?>
          <div class="alert alert-success"><?= session('success') ?></div>
        <?php endif; ?>

        <form action="<?= site_url('login') ?>" method="post" class="mb-4">
          <?= csrf_field() ?>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username" autofocus required />
            <div class="input-group-append">
              <div class="input-group-text"><span class="fas fa-user"></span></div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" required />
            <div class="input-group-append">
              <div class="input-group-text"><span class="fas fa-lock"></span></div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 mt-2">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
          </div>
        </form>

        <a href="<?= site_url('/') ?>" class="text-center d-block">Lihat Halaman User</a>
      </div>
    </div>
  </div>
</body>
</html>
