<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions/functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data_ubah = tampil("SELECT nomor, kontak_id, email, sosmed FROM kontak WHERE kontak_id = $id");
    $data_ubah = json_encode($data_ubah);
    echo $data_ubah;
    die;
}

$kontak = tampil("SELECT nomor, kontak_id, email, sosmed FROM kontak")[0];


// Ubah kontak
if (isset($_POST["ubah"])) {
    // cek apakah data berhasil ditambahkan  / tidak
    if (ubah_kontak($_POST) > 0) {
        echo "
            <script>
                alert('kontak berhasil diubah!');
                document.location.href = 'kontak-admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('kontak gagal diubah!');
                document.location.href = 'kontak-admin.php';
            </script>
        ";
    }
}

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
    <title>Kontak - Admin</title>
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
                            <h1 class="m-0">kontak</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item active">kontak</li>
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
                                        kontak
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="kontak" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="10%">Property</th>
                                                <th width="50%">Isu</th>
                                                <th width="5%">Ubah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Nomor</td>

                                                <td>
                                                    <?= $kontak["nomor"]; ?>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" onclick="datakontak( <?= $kontak["kontak_id"]; ?>);" data-target="#ubahKontakNomor" data-whatever="Nomor Kontak"><i class="nav-icon fas fa-pencil"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>
                                                    <?= $kontak["email"]; ?>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" onclick="datakontak( <?= $kontak["kontak_id"]; ?>);" data-target="#ubahKontakEmail" data-whatever="Email kontak"><i class="nav-icon fas fa-pencil"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sosmed</td>
                                                <td>
                                                    <?= $kontak["sosmed"]; ?>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" onclick="datakontak( <?= $kontak["kontak_id"]; ?>);" data-target="#ubahKontakSosmed" data-whatever="Sosmed Kontak"><i class="nav-icon fas fa-pencil"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Property</th>
                                                <th>Isu</th>
                                                <th>Ubah</th>
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

        <!-- Modal Ubah Nomor -->
        <div class="modal fade" id="ubahKontakNomor" tabindex="-1" aria-labelledby="ubah-kontak-nomor" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="kontak-nomor-id">
                        <div class="modal-header">
                            <h5 class="modal-title" id="judul-ubah-kontak-nomor">Ubah kontak</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="ubah-kontak-nomor">isi</label>
                                <input type="text" class="form-control" id="ubah-kontak-nomor" name="value-nomor" placeholder="Tuliskan nomor kontak baru" autofocus>
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

        <!-- Modal Ubah Sosmed -->
        <div class="modal fade" id="ubahKontakSosmed" tabindex="-1" aria-labelledby="ubah-kontak-sosmed" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="kontak-sosmed-id">
                        <div class="modal-header">
                            <h5 class="modal-title" id="judul-ubah-kontak-sosmed">Ubah kontak</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="ubah-kontak-sosmed">isi</label>
                                <input type="text" class="form-control" id="ubah-kontak-sosmed" name="value-sosmed" placeholder="Tuliskan URL / link sososial media kontak baru" autofocus>
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

        <!-- Modal Ubah Email -->
        <div class="modal fade" id="ubahKontakEmail" tabindex="-1" aria-labelledby="ubah-kontak-email" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="kontak-email-id">
                        <div class="modal-header">
                            <h5 class="modal-title" id="judul-ubah-kontak-email">Ubah kontak</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="ubah-kontak-email">isi</label>
                                <input type="text" class="form-control" id="ubah-kontak-email" name="value-email" placeholder="Tuliskan teks kontak baru" autofocus>
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
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     "responsive": true,
            // });
            $("#kontak").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#kontak_wrapper .col-md-6:eq(0)');
        });
    </script>

    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>

    <script>
        function datakontak(id) {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let data = JSON.parse(this.responseText)[0];
                    // console.log(data["nomor"]);
                    document.getElementById("kontak-nomor-id").value = data["kontak_id"];
                    document.getElementById("kontak-sosmed-id").value = data["kontak_id"];
                    document.getElementById("kontak-email-id").value = data["kontak_id"];
                    document.getElementById("ubah-kontak-nomor").value = data["nomor"];
                    document.getElementById("ubah-kontak-sosmed").value = data["sosmed"];
                    document.getElementById("ubah-kontak-email").value = data["email"];
                }
            };
            xhttp.open("GET", "?id=" + id, true);
            xhttp.send();
        };
    </script>

    <script>
        $('#ubahKontakNomor').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var kontak = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Ubah Data ' + kontak)
            // modal.find('.modal-body input').val(kontak)
        });

        $('#ubahKontakSosmed').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var kontak = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Ubah Data ' + kontak)
            // modal.find('.modal-body input').val(kontak)
        });

        $('#ubahKontakEmail').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var kontak = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Ubah Data ' + kontak)
            // modal.find('.modal-body input').val(kontak)
        });
    </script>

    <script>
        document.body.style.display = "block";
    </script>
</body>

</html>