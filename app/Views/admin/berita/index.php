<?php
/**
 * View: admin/berita/index.php
 * @var array $berita
 */
$beritaRows = '';
foreach ($berita as $i => $b) {
    $beritaRows .= '
<tr>
  <td>' . ($i + 1) . '</td>
  <td>' . esc($b['berita_judul']) . '</td>
  <td>
    <button type="button" class="btn btn-sm btn-warning mr-1" onclick="ubahBerita(' . $b['berita_id'] . ')"><i class="fas fa-edit"></i></button>
    <a href="' . base_url('admin/berita/hapus/' . $b['berita_id']) . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Yakin hapus berita ini?\')"><i class="fas fa-trash"></i></a>
  </td>
</tr>';
}

echo view('layouts/admin', [
    'title'    => $title,
    'extra_css' => '
<link rel="stylesheet" href="' . base_url('assets/plugins/summernote/summernote-bs4.min.css') . '">
',
    'content'  => '
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6"><h1 class="m-0">Berita</h1></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="' . base_url('admin') . '">Dashboard</a></li>
          <li class="breadcrumb-item active">Berita</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Berita</h3>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah">
          <i class="fas fa-plus"></i> Tambah Berita
        </button>
      </div>
      <div class="card-body">
        <table id="table-berita" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Judul</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>' . $beritaRows . '</tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <form action="' . base_url('admin/berita/tambah') . '" method="post">
        ' . csrf_field() . '
        <div class="modal-header"><h5 class="modal-title">Tambah Berita</h5><button type="button" class="close" data-dismiss="modal"><span>&times;</span></button></div>
        <div class="modal-body">
          <div class="form-group">
            <label>Judul Berita</label>
            <input type="text" class="form-control" name="berita-judul" required>
          </div>
          <div class="form-group">
            <label>Isi Berita</label>
            <textarea name="berita-teks" id="summernote-tambah" class="form-control" rows="6"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Ubah -->
<div class="modal fade" id="modalUbah" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <form action="' . base_url('admin/berita/ubah') . '" method="post">
        ' . csrf_field() . '
        <input type="hidden" name="id" id="ubah-id">
        <div class="modal-header"><h5 class="modal-title">Ubah Berita</h5><button type="button" class="close" data-dismiss="modal"><span>&times;</span></button></div>
        <div class="modal-body">
          <div class="form-group">
            <label>Judul Berita</label>
            <input type="text" class="form-control" name="ubah-berita-judul" id="ubah-judul" required>
          </div>
          <div class="form-group">
            <label>Isi Berita</label>
            <textarea name="ubah-berita-teks" id="summernote-ubah" class="form-control" rows="6"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
',
    'extra_js' => '
<script src="' . base_url('assets/plugins/summernote/summernote-bs4.min.js') . '"></script>
<script>
  $(function () {
    $("#table-berita").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $("#summernote-tambah").summernote({ height: 200 });
    $("#summernote-ubah").summernote({ height: 200 });
  });

  function ubahBerita(id) {
    fetch("' . base_url('admin/berita/get/') . '" + id)
      .then(r => r.json())
      .then(data => {
        let b = data[0];
        document.getElementById("ubah-id").value    = b.berita_id;
        document.getElementById("ubah-judul").value = b.berita_judul;
        $("#summernote-ubah").summernote("code", b.berita_teks);
        $("#modalUbah").modal("show");
      });
  }
</script>
',
]);
