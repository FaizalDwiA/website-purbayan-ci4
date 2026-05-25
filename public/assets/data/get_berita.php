<?php

require '../../functions/functions.php';

// Mengambil id dari parameter GET
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $berita = tampil("SELECT * FROM berita WHERE berita_id = '$id'");
} else {
    $berita = tampil("SELECT * FROM berita");
}

// Mengirimkan data gambar dalam format JSON
header("Content-type: application/json");
echo json_encode($berita);

// Menutup koneksi database
mysqli_close($conn);
