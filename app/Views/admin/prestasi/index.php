<?php
/**
 * View: admin/prestasi/index.php
 * @var array $prestasi
 */
$prestasiRows = '';
foreach ($prestasi as $i => $p) {
    $tingkat = ($p['prestasi_kategori'] == 'Madya') ? 'Kabupaten' : 'Nasional';
    $prestasiRows .= '
<tr>
  <td>' . ($i + 1) . '</td>
  <td>' . esc($p['prestasi_judul']) . '</td>
  <td>' . esc($p['prestasi_kategori']) . ' (' . $tingkat . ')</td>
  <td><img src="' . base_url('uploads/' . $p['prestasi_gambar']) . '" alt="" style="width:100px;height:60px;object-fit:cover;"></td>
  <td>
    <button type="button" class="btn btn-sm btn-warning mr-1" onclick="ubahPrestasi(' . $p['prestasi_id'] . ', \'' . addslashes($p['prestasi_judul']) . '\', \'' . $p['prestasi_kategori'] . '\')"><i class="fas fa-edit"></i></button>
    <a href="' . base_url('admin/prestasi/hapus/' . $p['prestasi_id']) . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Yakin hapus prestasi ini?\')"><i class="fas fa-trash"></i></a>
  </td>
</tr>';
}

echo view('layouts/admin', [
    'title'   => $title,
    'content' => '
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6"><h1 class="m-0">Prestasi</h1></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="' . base_url('admin') . '">Dashboard</a></li>
          <li class="breadcrumb-item active">Prestasi</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Prestasi</h3>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah">
          <i class="fas fa-plus"></i> Tambah Prestasi
        </button>
      </div>
      <div class="card-body">
        <table id="table-prestasi" class="table table-bordered table-striped">
          <thead>
            <tr><th>#</th><th>Judul</th><th>Kategori</th><th>Gambar</th><th>Aksi</th></tr>
          </thead>
          <tbody>' . $prestasiRows . '</tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="' . base_url('admin/prestasi/tambah') . '" method="post" enctype="multipart/form-data">
        ' . csrf_field() . '
        <div class="modal-header"><h5 class="modal-title">Tambah Prestasi</h5><button type="button" class="close" data-dismiss="modal"><span>&times;</span></button></div>
        <div class="modal-body">
          <div class="form-group">
            <label>Judul Prestasi</label>
            <input type="text" class="form-control" name="prestasi-judul" required>
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <select name="prestasi-kategori" class="form-control" required>
              <option value="Madya">Madya (Kabupaten)</option>
              <option value="Utama">Utama (Nasional)</option>
            </select>
          </div>
          <div class="form-group">
            <label>Gambar</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="gambar" id="customFile" accept="image/*" required>
              <label class="custom-file-label" for="customFile">Pilih Gambar</label>
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

<!-- Modal Ubah -->
<div class="modal fade" id="modalUbah" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="' . base_url('admin/prestasi/ubah') . '" method="post" enctype="multipart/form-data">
        ' . csrf_field() . '
        <input type="hidden" name="id" id="ubah-prestasi-id">
        <div class="modal-header"><h5 class="modal-title">Ubah Prestasi</h5><button type="button" class="close" data-dismiss="modal"><span>&times;</span></button></div>
        <div class="modal-body">
          <div class="form-group">
            <label>Judul Prestasi</label>
            <input type="text" class="form-control" name="prestasi-judul" id="ubah-judul-prestasi" required>
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <select name="prestasi-kategori" id="ubah-kategori-prestasi" class="form-control" required>
              <option value="Madya">Madya (Kabupaten)</option>
              <option value="Utama">Utama (Nasional)</option>
            </select>
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
    $("#table-prestasi").DataTable({ "responsive": true, "autoWidth": false });
  });
  function ubahPrestasi(id, judul, kategori) {
    document.getElementById("ubah-prestasi-id").value = id;
    document.getElementById("ubah-judul-prestasi").value = judul;
    document.getElementById("ubah-kategori-prestasi").value = kategori;
    $("#modalUbah").modal("show");
  }
</script>
',
]);
