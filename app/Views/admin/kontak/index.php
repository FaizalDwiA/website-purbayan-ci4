<?php
/**
 * View: admin/kontak/index.php
 * @var array $kontak
 */
$kontakRows = '';
foreach ($kontak as $k) {
    $kontakRows .= '
<tr>
  <td>' . $k['kontak_id'] . '</td>
  <td>' . esc($k['nomor']) . '</td>
  <td>' . esc($k['email']) . '</td>
  <td>' . esc($k['sosmed']) . '</td>
  <td>
    <button type="button" class="btn btn-sm btn-warning" onclick="ubahKontak(' . $k['kontak_id'] . ', \'' . esc($k['nomor']) . '\', \'' . esc($k['email']) . '\', \'' . esc($k['sosmed']) . '\')"><i class="fas fa-edit"></i></button>
  </td>
</tr>';
}

echo view('layouts/admin', [
    'title'   => $title,
    'content' => '
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6"><h1 class="m-0">Kontak</h1></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="' . base_url('admin') . '">Dashboard</a></li>
          <li class="breadcrumb-item active">Kontak</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Kontak</h3>
      </div>
      <div class="card-body">
        <table id="table-kontak" class="table table-bordered table-striped">
          <thead>
            <tr><th>#</th><th>Nomor</th><th>Email</th><th>Sosmed</th><th>Aksi</th></tr>
          </thead>
          <tbody>' . $kontakRows . '</tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- Modal Ubah -->
<div class="modal fade" id="modalUbah" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="' . base_url('admin/kontak/ubah') . '" method="post">
        ' . csrf_field() . '
        <input type="hidden" name="id" id="ubah-kontak-id">
        <div class="modal-header"><h5 class="modal-title">Ubah Kontak</h5><button type="button" class="close" data-dismiss="modal"><span>&times;</span></button></div>
        <div class="modal-body">
          <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="text" class="form-control" name="value-nomor" id="ubah-nomor">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="value-email" id="ubah-email">
          </div>
          <div class="form-group">
            <label>Media Sosial (URL)</label>
            <input type="text" class="form-control" name="value-sosmed" id="ubah-sosmed">
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
    $("#table-kontak").DataTable({ "responsive": true, "autoWidth": false });
  });
  function ubahKontak(id, nomor, email, sosmed) {
    document.getElementById("ubah-kontak-id").value = id;
    document.getElementById("ubah-nomor").value = nomor;
    document.getElementById("ubah-email").value = email;
    document.getElementById("ubah-sosmed").value = sosmed;
    $("#modalUbah").modal("show");
  }
</script>
',
]);
