<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "proklim_purbayan");
// Check connection
if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}


function buat_tb($sql, $tb, $aksi)
{
    global $conn;
    if ($aksi == "buat") {
        $aksi = ["Dibuat", "Membuat"];
    } elseif ($aksi == "hapus") {
        $aksi = ["Dihapus", "Menghapus"];
    }
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Table $tb Berhasil $aksi[0]');
                window.location.href='';
            </script>
        ";
    } else {
        echo "<script>
                alert('Gagal $aksi[1] Tabel $tb'" . mysqli_error($conn) . ");
                window.location.href='';
            </script>
        ";
    }
}

// Mengecek Tabel
function cek_tb($db)
{
    global $conn;
    $result = mysqli_query($conn, "SHOW TABLES LIKE '$db'");
    $cek_table = mysqli_num_rows($result);
    $tabel = [];

    if ($cek_table) {
        $text = "Tabel $db Ada";
    } else {
        $text = "Tabel $db Tidak ada";
    }

    $tabel["text"] = $text;
    $tabel["cek"] = $cek_table;

    return $tabel;
}

// Menampilkan isi
function tampil($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Tambah berita

function tambah_berita($data)
{
    global $conn;

    $judul = htmlspecialchars($data["berita-judul"]);
    $teks = htmlspecialchars($data["berita-teks"]);

    $query = "INSERT INTO berita (berita_judul, berita_teks)
                VALUES
                    ('$judul', '$teks')
                ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// Tambah Gambar

function tambah_gambar($data)
{
    global $conn;
    $images = $_FILES["gambar"];
    foreach ($images["name"] as $key => $file) {
        $name = $images["name"][$key];
        $error = $images["error"][$key];
        $tmp = $images["tmp_name"][$key];

        $berita_id = htmlspecialchars($data["berita"]);
        $gambar = upload($name, $error, $tmp);

        if (!$gambar) return;

        $query = "INSERT INTO gambar (id_berita, gambar_nama)
                VALUES
                    ('$berita_id', '$gambar')
                ";

        mysqli_query($conn, $query);
    }

    return mysqli_affected_rows($conn);
}

// Tambah Prestasi

function tambah_prestasi($data)
{
    global $conn;
    $images = $_FILES["gambar"];
    $name = $images["name"];
    $error = $images["error"];
    $tmp = $images["tmp_name"];

    $prestasi_judul = htmlspecialchars($data["prestasi-judul"]);
    $prestasi_kategori = htmlspecialchars($data["prestasi-kategori"]);
    $prestasi_gambar = upload($name, $error, $tmp);

    if (!$prestasi_gambar) return;

    $query = "INSERT INTO prestasi (prestasi_judul, prestasi_kategori, prestasi_gambar)
                VALUES
                    ('$prestasi_judul', '$prestasi_kategori', '$prestasi_gambar')
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Ubah Gambar

function ubah_gambar($data)
{
    global $conn;

    $id = htmlspecialchars($data["id"]);
    $id_berita = htmlspecialchars($data["berita"]);

    if ($_FILES["gambar"]["name"] == "") {
        $gambar = htmlspecialchars($data["gambar"]);
    } else {
        $images = $_FILES["gambar"];
        $name = $images["name"];
        $error = $images["error"];
        $tmp = $images["tmp_name"];

        $gambar = upload($name, $error, $tmp);

        if (!$gambar) return;

        hapusGambar($id);
    }

    $query = "UPDATE gambar SET
                    gambar_nama = '$gambar',
                    id_berita = '$id_berita'
                WHERE gambar_id = $id
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// Ubah berita
function ubah_berita($data)
{
    global $conn;

    $id = htmlspecialchars($data["id"]);
    $judul = htmlspecialchars($data["ubah-berita-judul"]);
    $teks = htmlspecialchars($data["ubah-berita-teks"]);

    $query = "UPDATE berita SET
                    berita_judul = '$judul',
                    berita_teks = '$teks'
                WHERE berita_id = $id
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// Ubah Prestasi

function ubah_prestasi($data)
{
    global $conn;

    $id = htmlspecialchars($data["id"]);
    $prestasi_judul = htmlspecialchars($data["prestasi-judul"]);
    $prestasi_kategori = htmlspecialchars($data["prestasi-kategori"]);

    if ($_FILES["gambar"]["name"] == "") {
        $prestasi_gambar = htmlspecialchars($data["gambar"]);
    } else {
        $images = $_FILES["gambar"];
        $name = $images["name"];
        $error = $images["error"];
        $tmp = $images["tmp_name"];

        $prestasi_gambar = upload($name, $error, $tmp);

        if (!$prestasi_gambar) return;

        hapusGambar($id);
    }

    $query = "UPDATE prestasi SET
                    prestasi_judul = '$prestasi_judul',
                    prestasi_kategori = '$prestasi_kategori',
                    prestasi_gambar = '$prestasi_gambar'
                WHERE prestasi_id = $id
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// Ubah Kontak
function ubah_kontak($data)
{
    global $conn;

    if (isset($_POST["value-nomor"])) {
        $field = "nomor";
        $value = $_POST["value-nomor"];
    } else if (isset($_POST["value-sosmed"])) {
        $field = "sosmed";
        $value = $_POST["value-sosmed"];
    } else if (isset($_POST["value-email"])) {
        $field = "sosmed";
        $value = $_POST["value-email"];
    }

    $id = htmlspecialchars($data["id"]);
    $data = htmlspecialchars($value);

    $query = "UPDATE kontak SET
                    $field = '$data'
                WHERE kontak_id = $id
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


// Hapus Data
function hapus($id, $kd)
{
    global $conn;
    if ($kd == "gmb") {
        $table = 'gambar';
        $nama_id = "gambar_id";
        hapusGambar($id);
    } else if ($kd == "acr") {
        $table = 'berita';
        $nama_id = "berita_id";
    } else if ($kd == "prestasi") {
        $table = 'prestasi';
        $nama_id = "prestasi_id";
    }

    mysqli_query($conn, "DELETE FROM $table where $nama_id = $id");

    return mysqli_affected_rows($conn);
}

// Hapus gambar
function hapusGambar($id)
{
    $gambar = tampil("SELECT gambar_nama FROM gambar WHERE gambar_id = $id");
    unlink("assets/img/upload/" . $gambar[0]["gambar_nama"]);
}

// Upload gambar
function upload($name, $error, $tmp)
{
    // $namaFile = $_FILES["gambar"]["name"];
    // $ukuranFile = $_FILES["gambar"]["size"];
    // $error = $_FILES["gambar"]["error"];
    // $tmpName = $_FILES["gambar"]["tmp_name"];


    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "
        <script>
            alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
    $ekstensiGambar = explode('.', $name);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script>
            alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    // if ($ukuran > 1000000) {
    //     echo "
    //     <script>
    //         alert('Ukuran gambar terlalu besar!');
    //     </script>";
    //     return false;
    // }

    // lolos pengecekan gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmp, 'assets/img/upload/' . $namaFileBaru);
    return $namaFileBaru; // supaya menghasilkan nama file
}

// Registrasi

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada / belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('Username yang dipilih sudah terdaftar!');
            </script>
        ";

        return false;
    }

    // cek konfirmasi password
    if (
        $password !== $password2
    ) {
        echo "
            <script>
                alert('konfirmasi password tidak sesuai!');
            </script>
        ";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user (username, user_password) VALUES('$username', '$password')");

    return mysqli_affected_rows($conn);
}
