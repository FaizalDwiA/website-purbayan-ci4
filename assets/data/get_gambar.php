<?php
require '../../functions/functions.php';

// Mengambil id dari parameter GET
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $gambar  = tampil("SELECT * FROM gambar WHERE id_berita = '$id'");
} else if (isset($_GET["gambar_id"])) {
    $id = $_GET["gambar_id"];
    $gambar  = tampil("SELECT * FROM gambar WHERE gambar_id = '$id'");
} else {
    $gambar  = tampil("SELECT * FROM gambar");
}

// Mengirimkan data gambar dalam format JSON
header("Content-type: application/json");
echo json_encode($gambar);

// Menutup koneksi database
mysqli_close($conn);
