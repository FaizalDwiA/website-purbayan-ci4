<?php
/**
 * View: admin/gambar/index.php
 * @var array $gambar
 * @var array $berita
 */
$gambarRows = '';
foreach ($gambar as $i => $g) {
    $gambarRows .= '
<tr>
  <td>' . ($i + 1) . '</td>
  <td><img src="' . base_url('uploads/' . $g['gambar_nama']) . '" alt="" class="tampil-gambar" style="width:100px;height:60px;object-fit:cover;"></td>
  <td>' . esc($g['berita_judul'] ?? '-') . '</td>
  <td>
    <button type="button" class="btn btn-sm btn-warning mr-1" onclick="ubahGambar(' . $g['gambar_id'] . ', \'' . esc($g['gambar_nama']) . '\', \'' . $g['id_berita'] . '\')"><i class="fas fa-edit"></i></button>
    <a href="' . base_url('admin/gambar/hapus/' . $g['gambar_id']) . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Yakin hapus gambar ini?\')"><i class="fas fa-trash"></i></a>
  </td>
</tr>';
}

$optionBerita = '';
foreach ($berita as $b) {
    $optionBerita .= '<option value="' . $b['berita_id'] . '">' . esc($b['berita_judul']) . '</option>';
}

echo view('layouts/admin', [
    'title'   => $title,
    'content' => '
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6"><h1 class="m-0">Gambar</h1></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="' . base_url('admin') . '">Dashboard</a></li>
          <li class="breadcrumb-item active">Gambar</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Gambar</h3>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah">
          <i class="fas fa-plus"></i> Tambah Gambar
        </button>
      </div>
      <div class="card-body">
        <table id="table-gambar" class="table table-bordered table-striped">
          <thead>
            <tr><th>#</th><th>Gambar</th><th>Berita</th><th>Aksi</th></tr>
          </thead>
          <tbody>' . $gambarRows . '</tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="' . base_url('admin/gambar/tambah') . '" method="post" enctype="multipart/form-data">
        ' . csrf_field() . '
        <div class="modal-header"><h5 class="modal-title">Tambah Gambar</h5><button type="button" class="close" data-dismiss="modal"><span>&times;</span></button></div>
        <div class="modal-body">
          <div class="form-group">
            <label>Berita</label>
            <select name="berita" class="form-control" required><option value="">-- Pilih Berita --</option>' . $optionBerita . '</select>
          </div>
          <div class="form-group">
            <label>Gambar (bisa pilih banyak)</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="gambar[]" id="customFile" multiple accept="image/*" required>
              <label class="custom-file-label" for="customFile">Pilih Gambar</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Ubah -->
<div class="modal fade" id="modalUbah" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="' . base_url('admin/gambar/ubah') . '" method="post" enctype="multipart/form-data">
        ' . csrf_field() . '
        <input type="hidden" name="id" id="ubah-gambar-id">
        <div class="modal-header"><h5 class="modal-title">Ubah Gambar</h5><button type="button" class="close" data-dismiss="modal"><span>&times;</span></button></div>
        <div class="modal-body">
          <div class="form-group">
            <label>Berita</label>
            <select name="berita" id="ubah-berita" class="form-control" required><option value="">-- Pilih Berita --</option>' . $optionBerita . '</select>
          </div>
          <div class="form-group">
            <label>Ganti Gambar (opsional)</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="gambar" id="customFileUbah" accept="image/*">
              <label class="custom-file-label" for="customFileUbah">Pilih Gambar Baru</label>
            </div>
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
<script>
  $(function () {
    $("#table-gambar").DataTable({ "responsive": true, "autoWidth": false });
  });
  function ubahGambar(id, nama, beritaId) {
    document.getElementById("ubah-gambar-id").value = id;
    document.getElementById("ubah-berita").value = beritaId;
    $("#modalUbah").modal("show");
  }
</script>
',
]);
