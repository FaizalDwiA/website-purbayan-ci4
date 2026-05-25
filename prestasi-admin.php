<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions/functions.php';


if (isset($_POST["submit"])) {
    // cek apakah data berhasil ditambahkan  / tidak
    if (tambah_prestasi($_POST) > 0) {
        echo "
            <script>
                alert('Data prestasi berhasil ditambahkan!');
                document.location.href = 'prestasi-admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data prestasi gagal ditambahkan!');
                document.location.href = 'prestasi-admin.php';
            </script>
        ";
    }
}

// Ubah gambar
if (isset($_POST["ubah"])) {
    // cek apakah data berhasil ditambahkan  / tidak
    if (ubah_prestasi($_POST) > 0) {
        echo "
            <script>
                alert('Data prestasi berhasil diubah!');
                document.location.href = 'prestasi-admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data prestasi gagal diubah!');
                document.location.href = 'prestasi-admin.php';
            </script>
        ";
    }
}

$prestasi = tampil("SELECT * FROM prestasi");
// $berita = tampil("SELECT *, berita_id FROM berita");
// $data = tampil("SELECT * FROM berita INNER JOIN gambar ON berita.berita_id = gambar.id_berita");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/plugins/adminLTE/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome6/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <title>Prestasi - Admin</title>
    <style>
        body {
            display: none;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            width: 100%;
            align-items: center;
        }

        .card-header::after {
            content: none;
        }

        .tampil-gambar {
            width: 10vw;
        }

        th.aksi {
            width: 5vw;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Navbar -->
        <?php include "pages/navbar/index.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include "pages/sidebar/index.php" ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Prestasi</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item active">Prestasi</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title" style="font-size: 1.5rem;">
                                        Prestasi
                                    </h3>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPrestasi" data-whatever="Gambar">Tambah Data</button>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="prestasi" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th class="aksi">Ubah</th>
                                                <th class="aksi">Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($prestasi as $p) : ?>
                                                <tr>
                                                    <td>
                                                        <img class="tampil-gambar" src="<?= "assets/img/upload/" . $p["prestasi_gambar"]; ?>">
                                                    </td>
                                                    <td><?= $p["prestasi_judul"]; ?></td>
                                                    <td><?= $p["prestasi_kategori"]; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning" data-toggle="modal" onclick="dataGambar(<?= $p["prestasi_id"]; ?>)" data-target="#ubahPrestasi" data-whatever="Prestasi"><i class="nav-icon fas fa-pencil"></i></button>
                                                    </td>
                                                    <td>
                                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="hapus.php?id=<?= $p["prestasi_id"]; ?>&kd=prestasi"><button type="button" class="btn btn-danger"><i class="nav-icon fas fa-trash"></i></button></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Ubah</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="">Proklim Purbayan</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Modal Tambah -->
        <div class="modal fade" id="tambahPrestasi" tabindex="-1" aria-labelledby="tambahPrestasiLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahPrestasiLabel">New message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputFile">Tambah Gambar</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile" required multiple>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="berita-judul">Judul</label>
                                <input type="text" class="form-control" id="prestasi-judul" name="prestasi-judul" placeholder="Tuliskan judul prestasi baru" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="berita-judul">Kategori</label>
                                <!-- <textarea class="form-control" placeholder="Tuliskan  kategori singkat prestasi baru" name="prestasi-kategori" id="prestasi-kategori" cols="30" rows="10"></textarea> -->
                                <select name="prestasi-kategori" id="prestasi-kategori" class="custom-select" value="" required>
                                    <option value="Madya">Madya</option>
                                    <option value="Utama">Utama</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Ubah -->
        <div class="modal fade" id="ubahPrestasi" tabindex="-1" aria-labelledby="ubahGambarLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="idUbahPrestasi">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ubahGambarLabel">New message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="ubahFileGambar">Gambar</label>
                                <div class="input-group">
                                    <img src="" width="40" id="tampil_gambar_ubah" style="width: 20vw; margin-bottom: 30px;">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="hidden" name="gambar" id="ubah-file-gambar-lama">
                                        <input type="file" name="gambar" class="custom-file-input" id="ubahFileGambar" multiple>
                                        <label class="custom-file-label" for="ubahFileGambar">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prestasi-judul">Judul</label>
                                <input type="text" class="form-control" id="ubah-prestasi-judul" name="prestasi-judul" placeholder="Tuliskan judul prestasi baru" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="ubah-prestasi-kategori">kategori singkat</label>
                                <!-- <textarea class="form-control" placeholder="Tuliskan  kategori singkat prestasi baru" name="prestasi-kategori" id="ubah-prestasi-kategori" cols="30" rows="10"></textarea> -->
                                <select name="prestasi-kategori" id="ubah-prestasi-kategori" class="custom-select" value="" required>
                                    <option value="Madya">Madya</option>
                                    <option value="Utama">Utama</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/jszip/jszip.min.js"></script>
    <script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/plugins/adminLTE/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="assets/plugins/adminLTE/js/demo.js"></script>
    <!-- Page specific script -->
    <!-- bs-custom-file-input -->
    <script src="assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        $(function() {
            $("#prestasi").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#prestasi_wrapper .col-md-6:eq(0)');
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     "responsive": true,
            // });
        });
    </script>

    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>

    <script>
        function dataGambar(id) {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // let data = JSON.parse(this.responseText)[0];
                    let response = JSON.parse(xhttp.responseText)[0];
                    // console.log(response);
                    document.getElementById('tampil_gambar_ubah').src = "assets/img/upload/" + response.prestasi_gambar;
                    document.getElementById("ubah-prestasi-judul").value = response.prestasi_judul;
                    document.getElementById("ubah-file-gambar-lama").value = response.prestasi_gambar;
                    document.getElementById("ubah-prestasi-kategori").value = response.prestasi_kategori;
                    document.getElementById("idUbahPrestasi").value = response.prestasi_id;
                }
            };
            xhttp.open("GET", "assets/data/get_prestasi.php?id=" + id, true);
            xhttp.send();
        };
    </script>

    <script>
        $('#tambahPrestasi').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var gambar = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Tambah Data ' + gambar)
            // modal.find('.modal-body input').val(recipient)
        });

        $('#ubahPrestasi').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var gambar = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Ubah Data ' + gambar)
            // modal.find('.modal-body input').val(recipient)
        });
    </script>

    <script>
        const getTextarea = document.querySelector("textarea");
        const buttonSave = document.querySelector("button[name=submit]");

        buttonSave.addEventListener("click", () => {
            const valueTextarea = getTextarea.value.replace(/\n/g, '<br>');

            getTextarea.value = valueTextarea;
        });
    </script>

    <script>
        document.body.style.display = "block";
    </script>
</body>

</html>