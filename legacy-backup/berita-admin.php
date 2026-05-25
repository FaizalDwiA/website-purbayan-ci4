<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions/functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data_ubah = tampil("SELECT berita_judul, berita_id, berita_teks FROM berita WHERE berita_id = $id");
    $data_ubah = json_encode($data_ubah);
    echo $data_ubah;
    die;
}

$berita = tampil("SELECT berita_judul, berita_id, berita_teks FROM berita");

// Tambah berita
if (isset($_POST["submit"])) {
    // cek apakah data berhasil ditambahkan  / tidak
    if (tambah_berita($_POST) > 0) {
        echo "
            <script>
                alert('berita berhasil ditambahkan!');
                document.location.href = 'berita-admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('berita gagal ditambahkan!');
                document.location.href = 'berita-admin.php';
            </script>
        ";
    }
}

// Ubah berita
if (isset($_POST["ubah"])) {
    // $code = htmlspecialchars($_POST["ubah-berita-teks"]);
    // var_dump(htmlspecialchars_decode($code));
    // cek apakah data berhasil ditambahkan  / tidak
    if (ubah_berita($_POST) > 0) {
        echo "
            <script>
                alert('berita berhasil diubah!');
                document.location.href = 'berita-admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('berita gagal diubah!');
                document.location.href = 'berita-admin.php';
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
    <title>berita - Admin</title>
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
                            <h1 class="m-0">berita</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item active">berita</li>
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
                                        berita
                                    </h3>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahberita" data-whatever="berita">Tambah Data</button>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="berita" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="35%">Judul Berita</th>
                                                <th width="50%">Teks Berita</th>
                                                <th width="5%">Ubah</th>
                                                <th width="5%">Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($berita as $a) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $a["berita_judul"]; ?>
                                                    </td>
                                                    <td>
                                                        <?= $a["berita_teks"]; ?>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="tombol-ubah btn btn-warning" data-toggle="modal" onclick="databerita( <?= $a["berita_id"]; ?>);" data-target="#ubahberita" data-whatever="berita"><i class="nav-icon fas fa-pencil"></i></button>
                                                    </td>
                                                    <td>
                                                        <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="hapus.php?id=<?= $a["berita_id"]; ?>&kd=acr"><button type="button" class="btn btn-danger"><i class="nav-icon fas fa-trash"></i></button></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Judul Berita</th>
                                                <th>Teks Berita</th>
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
                                <label for="berita-judul">Judul Berita</label>
                                <input type="text" class="form-control" id="berita-judul" name="berita-judul" placeholder="Tuliskan judul berita baru" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="berita-teks">Teks Berita</label>
                                <!-- <input type="text" class="form-control" id="berita-teks" name="berita-teks" placeholder="Tuliskan teks berita baru" autofocus> -->
                                <textarea class="form-control" id="berita-teks" name="berita-teks" placeholder="Tuliskan teks berita baru" cols="30" rows="10"></textarea>
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
        <div class="modal fade" id="ubahberita" tabindex="-1" aria-labelledby="ubah-berita" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="ubah-berita">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ubah-berita">Ubah berita</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="ubah-berita-judul">Judul Berita</label>
                                <input type="text" class="form-control" id="ubah-berita-judul" name="ubah-berita-judul" placeholder="Tuliskan judul berita baru" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="ubah-berita-teks">Teks Berita</label>
                                <!-- <input type="text" class="form-control" id="ubah-berita-teks" name="ubah-berita-teks" placeholder="Tuliskan teks berita baru" autofocus> -->
                                <textarea class="form-control" id="ubah-berita-teks" name="ubah-berita-teks" placeholder="Tuliskan teks berita baru" cols="30" rows="10"></textarea>
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
        function databerita(id) {
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let response = JSON.parse(xhr.responseText)[0];
                    document.getElementById("ubah-berita").value = response["berita_id"];
                    document.getElementById("ubah-berita-judul").value = response["berita_judul"];
                    document.getElementById("ubah-berita-teks").value = response["berita_teks"];
                }
            };
            xhr.open("GET", "assets/data/get_berita.php?id=" + id, true);
            xhr.send();
        };
    </script>

    <script>
        $('#tambahberita').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var berita = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Tambah Data ' + berita)
            // modal.find('.modal-body input').val(berita)
        });
    </script>

    <script>
        const tambahBeritaTeks = document.getElementById("berita-teks");
        const ubahBeritaTeks = document.getElementById("ubah-berita-teks");

        const buttonSave = document.querySelector("button[name=submit]");
        const buttonUbah = document.querySelector("button[name=ubah]");
        const tombolUbah = document.querySelectorAll(".tombol-ubah");

        buttonSave.addEventListener("click", () => {
            const valueTextarea = tambahBeritaTeks.value.replace(/\n/g, '<br>');

            tambahBeritaTeks.value = valueTextarea;
        });

        buttonUbah.addEventListener("click", () => {
            const valueTextarea = ubahBeritaTeks.value.replace(/\n/g, '<br>');

            ubahBeritaTeks.value = valueTextarea;
        });

        tombolUbah.forEach(e => {
            e.addEventListener("click", () => {
                console.log("ok");
                setTimeout(() => {
                    const valueTextarea = ubahBeritaTeks.value.replaceAll('&lt;br&gt;', '\n');

                    ubahBeritaTeks.value = valueTextarea;
                }, 500);
            });
        });
    </script>

    <script>
        document.body.style.display = "block";
    </script>
</body>

</html>