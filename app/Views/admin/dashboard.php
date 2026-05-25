<?php
/**
 * View: admin/dashboard.php
 * @var array $berita
 * @var array $gambar
 * @var array $prestasi
 */
echo view('layouts/admin', [
    'title'   => $title,
    'content' => '
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6"><h1 class="m-0">Dashboard</h1></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3>' . count($berita) . '</h3>
            <p>Total Berita</p>
          </div>
          <div class="icon"><i class="fas fa-newspaper"></i></div>
          <a href="' . base_url('admin/berita') . '" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>' . count($gambar) . '</h3>
            <p>Total Gambar</p>
          </div>
          <div class="icon"><i class="fas fa-images"></i></div>
          <a href="' . base_url('admin/gambar') . '" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>' . count($prestasi) . '</h3>
            <p>Total Prestasi</p>
          </div>
          <div class="icon"><i class="fas fa-trophy"></i></div>
          <a href="' . base_url('admin/prestasi') . '" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
',
]);
