<?php

require '../../functions/functions.php';

// Mengambil id dari parameter GET
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $prestasi = tampil("SELECT * FROM prestasi WHERE prestasi_id = '$id'");
} else {
    $prestasi = tampil("SELECT * FROM prestasi");
}

// Mengirimkan data gambar dalam format JSON
header("Content-type: application/json");
echo json_encode($prestasi);

// Menutup koneksi database
mysqli_close($conn);
