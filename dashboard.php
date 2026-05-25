<!DOCTYPE html>

<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions/functions.php';

$galeries = tampil("SELECT * FROM gambar");

if (isset($_POST["submit_gambar"])) {
    // cek apakah data berhasil ditambahkan  / tidak
    if (tambah_gambar($_POST) > 0) {
        echo "
            <script>
                alert('gallery berhasil ditambahkan!');
                document.location.href = 'berita-admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('gallery gagal ditambahkan!');
                document.location.href = 'berita-admin.php';
            </script>
        ";
    }
}

?>

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
    <title>Dashboard</title>
    <style>
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
                            <h1 class="m-0">Gambar</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
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
                                        Gambar
                                    </h3>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahGambar" data-whatever="Gambar">Tambah Data</button>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="galeri" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>berita</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($galeries as $galeri) : ?>
                                                <tr>
                                                    <td>
                                                        <img class="tampil-gambar" src="<?= "assets/img/" . $galeri["gambar"] ?>">
                                                    </td>
                                                    <td><?= $galeri["berita_id"] ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>berita</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title" style="font-size: 1.5rem;">
                                        berita
                                    </h3>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahGambar" data-whatever="Gambar">Tambah Data</button>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="berita" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>berita</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <?php foreach ($galeries as $galeri) : ?> -->
                                            <tr>
                                                <td>
                                                    Id
                                                </td>
                                                <td>
                                                    berita
                                                </td>
                                            </tr>
                                            <!-- <?php endforeach; ?> -->
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>berita</th>
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

        <!-- Modal -->
        <div class="modal fade" id="tambahGambar" tabindex="-1" aria-labelledby="tambahGambarLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahGambarLabel">New message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputFile">Tambah Gambar</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>berita</label>
                                <select name="berita" class="custom-select">
                                    <option value="1">option 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit_gambar" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tambahberita" tabindex="-1" aria-labelledby="tambahberitaLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahberitaLabel">New message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputFile">Tambah Data</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit_berita" class="btn btn-primary">Tambah</button>
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
            $("#galeri").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#galeri_wrapper .col-md-6:eq(0)');
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     "responsive": true,
            // });
            $("#berita").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#berita_wrapper .col-md-6:eq(0)');
        });
    </script>

    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>

    <script>
        $('#tambahGambar').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var gambar = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Tambah Data ' + gambar)
            // modal.find('.modal-body input').val(recipient)
        })

        $('#tambahberita').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var berita = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Tambah Data ' + berita)
            // modal.find('.modal-body input').val(berita)
        })
    </script>
</body>

</html>