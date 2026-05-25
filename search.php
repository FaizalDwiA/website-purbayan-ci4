<?php

if (isset($_POST["cari"])) {
    $get_cari = htmlspecialchars($_POST["cari"]);
    $get_db_id = tampil("SELECT berita_id FROM berita WHERE berita_judul = '$get_cari'")[0]["berita_id"];

    header("Location: berita.php?id=" . $get_db_id);
    exit;
}
