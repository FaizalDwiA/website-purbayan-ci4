<?php

require "../../functions/functions.php";

if (isset($_GET["id"])) {
    $cari = $_GET["id"];
    $berita = tampil("SELECT * FROM berita");
    $id_berita = "";

    foreach ($berita as $b) {;
        if ($b["berita_judul"] == $cari) {
            $id_berita = $b["berita_id"];
            break;

            var_dump($b["berita_judul"]);
            die;
        }
    }

    header("Location: berita.php?id=" . $id_berita);
    exit;
}
