<?php

// membuat koneksi
$conn = mysqli_connect("localhost", "root", "");
// cek koneksi
if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

// Mengecek apakah database "mydatabase" sudah ada
$result = mysqli_query($conn, "SHOW DATABASES LIKE 'proklim_purbayan'");
$cek_database = mysqli_num_rows($result);

// Menampilkan pesan jika database sudah ada atau belum
if ($cek_database) {
    $tampil_database = "Database proklim_purbayan Sudah Ada";
} else {
    $tampil_database = "Database proklim_purbayan Belum Ada";
}

// Membuat Database
if (isset($_POST["buat_db"])) {
    $sql = "CREATE DATABASE proklim_purbayan";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Database proklim_purbayan Berhasil Dibuat');
                window.location.href='';
            </script>
        ";
    } else {
        echo "<script>
                alert('Error Membuat Database proklim_purbayan'" . mysqli_error($conn) . ");
                window.location.href='';
            </script>
        ";
    }
} elseif (isset($_POST["hapus_db"])) {
    $sql = "DROP DATABASE proklim_purbayan";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Database proklim_purbayan Berhasil Dihapus');
                window.location.href='';
            </script>
        ";
    } else {
        echo "<script>
                alert('Error Menghapus Database proklim_purbayan'" . mysqli_error($conn) . ");
                window.location.href='';
            </script>
        ";
    }
}

// Menambahkan database
if ($cek_database) {
    $conn = mysqli_connect("localhost", "root", "", "proklim_purbayan");
    require 'functions/functions.php';

    // sql untuk membuat table
    // User
    $user = cek_tb("user");

    if (isset($_POST["buat_user"])) {
        $sql = "CREATE TABLE user (
            user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            user_password VARCHAR(60) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        buat_tb($sql, "user", "buat");
    } elseif (isset($_POST["hapus_user"])) {
        $sql = "DROP TABLE user";
        buat_tb($sql, "user", "hapus");
    }

    // gambar
    $gambar = cek_tb("gambar");

    if (isset($_POST["buat_gambar"])) {
        $sql = "CREATE TABLE gambar (
            gambar_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            gambar_nama VARCHAR(60) NOT NULL,
            id_berita VARCHAR(30) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        buat_tb($sql, "gambar", "buat");
    } elseif (isset($_POST["hapus_gambar"])) {
        $sql = "DROP TABLE gambar";
        buat_tb($sql, "gambar", "hapus");
    }

    // berita
    $berita = cek_tb("berita");

    if (isset($_POST["buat_berita"])) {
        $sql = "CREATE TABLE berita (
            berita_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            berita_judul VARCHAR(100) NOT NULL,
            berita_teks text NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        buat_tb($sql, "berita", "buat");
    } elseif (isset($_POST["hapus_berita"])) {
        $sql = "DROP TABLE berita";
        buat_tb($sql, "berita", "hapus");
    }

    // kontak
    $kontak = cek_tb("kontak");

    if (isset($_POST["buat_kontak"])) {
        $sql = "CREATE TABLE kontak (
            kontak_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nomor VARCHAR(20) NOT NULL,
            email VARCHAR(70) NOT NULL,
            sosmed VARCHAR(70) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        buat_tb($sql, "kontak", "buat");
    } elseif (isset($_POST["hapus_kontak"])) {
        $sql = "DROP TABLE kontak";
        buat_tb($sql, "kontak", "hapus");
    }

    // prestasi
    $prestasi = cek_tb("prestasi");

    if (isset($_POST["buat_prestasi"])) {
        $sql = "CREATE TABLE prestasi (
            prestasi_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            prestasi_judul VARCHAR(50) NOT NULL,
            prestasi_kategori VARCHAR(20)  NOT NULL,
            prestasi_gambar VARCHAR(70) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
        buat_tb($sql, "prestasi", "buat");
    } elseif (isset($_POST["hapus_prestasi"])) {
        $sql = "DROP TABLE prestasi";
        buat_tb($sql, "prestasi", "hapus");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/plugins/adminLTE/css/adminlte.min.css">
    <title>Install</title>
</head>

<body>
    <section class="content mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>Membuat Database dan Tabel</h1>
                        </div>
                        <div class="card-body">
                            <table border="1" class="table table-hover table-dark" width="100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Database/Table</th>
                                        <th>Keterangan</th>
                                        <th>Buat</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <form action="" method="post">
                                        <tr>
                                            <td>1</td>
                                            <td><b>proklim_purbayan</b></td>
                                            <td><?= $tampil_database; ?></td>
                                            <td>
                                                <button type="submit" name="buat_db" class="btn btn-primary" <?= ($cek_database) ? "disabled" : ""; ?>>
                                                    Buat
                                                </button>
                                            </td>
                                            <td>
                                                <button type="submit" name="hapus_db" class="btn btn-danger" <?= (!$cek_database) ? "disabled" : ""; ?>>
                                                    Hapus
                                                </button>
                                            </td>
                                        </tr>
                                        <?php if ($cek_database) : ?>
                                            <tr>
                                                <td>2</td>
                                                <td><b>User</b></td>
                                                <td><?= $user["text"]; ?></td>
                                                <td>
                                                    <button type="submit" name="buat_user" class="btn btn-primary" <?= ($user["cek"] && $cek_database) ? "disabled" : ""; ?>>
                                                        Buat
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="submit" name="hapus_user" class="btn btn-danger" <?= (!$user["cek"] && $cek_database) ? "disabled" : ""; ?>>
                                                        Hapus
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td><b>berita</b></td>
                                                <td><?= $berita["text"]; ?></td>
                                                <td>
                                                    <button type="submit" name="buat_berita" class="btn btn-primary" <?= ($berita["cek"] && $cek_database) ? "disabled" : ""; ?>>
                                                        Buat
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="submit" name="hapus_berita" class="btn btn-danger" <?= (!$berita["cek"] && $cek_database) ? "disabled" : ""; ?>>
                                                        Hapus
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td><b>gambar</b></td>
                                                <td><?= $gambar["text"]; ?></td>
                                                <td>
                                                    <button type="submit" name="buat_gambar" class="btn btn-primary" <?= ($gambar["cek"] && $cek_database) ? "disabled" : ""; ?>>
                                                        Buat
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="submit" name="hapus_gambar" class="btn btn-danger" <?= (!$gambar["cek"] && $cek_database) ? "disabled" : ""; ?>>
                                                        Hapus
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td><b>Kontak</b></td>
                                                <td><?= $kontak["text"]; ?></td>
                                                <td>
                                                    <button type="submit" name="buat_kontak" class="btn btn-primary" <?= ($kontak["cek"] && $cek_database) ? "disabled" : ""; ?>>
                                                        Buat
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="submit" name="hapus_kontak" class="btn btn-danger" <?= (!$kontak["cek"] && $cek_database) ? "disabled" : ""; ?>>
                                                        Hapus
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td><b>prestasi</b></td>
                                                <td><?= $prestasi["text"]; ?></td>
                                                <td>
                                                    <button type="submit" name="buat_prestasi" class="btn btn-primary" <?= ($prestasi["cek"] && $cek_database) ? "disabled" : ""; ?>>
                                                        Buat
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="submit" name="hapus_prestasi" class="btn btn-danger" <?= (!$prestasi["cek"] && $cek_database) ? "disabled" : ""; ?>>
                                                        Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>