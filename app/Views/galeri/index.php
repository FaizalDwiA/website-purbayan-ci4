<?php
/**
 * View: galeri/index.php
 * Halaman Galeri Kegiatan (Eco-Modern Premium Redesign)
 * @var array $judul_berita
 * @var array $gambar_awal
 */
echo view('layouts/main', [
    'title'       => $title,
    'currentPage' => 'galeri',
    'extra_css'   => '
<style>
  #tema_gambar:focus {
    border-color: var(--primary) !important;
    background-color: #ffffff !important;
    box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.12) !important;
  }
  @keyframes zoom {
    from { transform: scale(0.85); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
  }
</style>
',
    'content'     => (function() use ($judul_berita, $gambar_awal) {
        $gambarAwalHtml = '';
        foreach ($gambar_awal as $gambar) {
            $gambarAwalHtml .= '
      <figure class="wp-block-image size-large" style="margin: 0; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm); border: 1px solid var(--border-light); cursor: pointer; transition: var(--transition);" onmouseover="this.style.transform=\'scale(1.03) translateY(-4px)\'; this.style.boxShadow=\'var(--shadow-md)\';" onmouseout="this.style.transform=\'scale(1) translateY(0)\'; this.style.boxShadow=\'var(--shadow-sm)\';">
        <img decoding="async" onclick="bukaModal(this)" src="' . base_url('uploads/' . $gambar['gambar_nama']) . '" alt="" style="width: 100%; height: 220px; object-fit: cover; display: block; transition: var(--transition);" />
      </figure>';
        }

        $optionHtml = '';
        foreach ($judul_berita as $j) {
            $optionHtml .= '<option value="' . esc($j['berita_id']) . '">' . esc($j['berita_judul']) . '</option>';
        }

        return '
<main id="wp--skip-link--target" style="overflow-x: hidden; padding-bottom: 80px;">
  <!-- Modern Page Banner -->
  <section class="modern-page-banner">
    <div class="container">
      <h1 class="modern-page-title">Galeri Foto</h1>
    </div>
  </section>

  <!-- Offset Content Container -->
  <div class="container">
    <div class="modern-content-box">
      <p>Selamat datang di galeri visual <b>Proklim Purbayan</b>. Temukan dokumentasi foto aksi gotong royong warga, sosialisasi kesehatan, kegiatan pengelolaan bank sampah, pekarangan pangan sehat, serta berbagai acara kemasyarakatan lokal desa kami.</p>
      
      <hr style="border: none; border-top: 1px solid var(--border-light); margin: 30px 0 40px 0;">

      <!-- Custom Filter Category Box Card -->
      <div class="form-group" style="max-width: 500px; margin-bottom: 45px;">
        <label for="tema_gambar" style="display: block; font-size: 1.1rem; font-weight: 700; margin-bottom: 12px; font-family: var(--font-heading); color: var(--text-dark);">Pilih Tema Kegiatan:</label>
        <div style="position: relative;">
          <select id="tema_gambar" class="custom-select" style="width: 100%; height: auto; padding: 14px 20px; font-family: var(--font-body); font-size: 0.95rem; font-weight: 600; color: var(--text-dark); background-color: var(--bg-site); border: 2px solid var(--border-light); border-radius: var(--radius-md); outline: none; transition: var(--transition); cursor: pointer; -webkit-appearance: none; -moz-appearance: none; appearance: none;">
            ' . $optionHtml . '
          </select>
          <i class="fas fa-chevron-down" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); color: var(--text-muted); pointer-events: none;"></i>
        </div>
      </div>

      <!-- Gallery Photo Grid -->
      <div class="wp-block-gallery has-nested-images columns-default is-cropped is-layout-flex wp-block-gallery-is-layout-flex" id="tampilGambar" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">
        ' . $gambarAwalHtml . '
      </div>
      
      <div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>
    </div>
  </div>
</main>

<!-- Glassmorphic Lightbox Modal Popup -->
<div id="myModal" class="modal" style="display:none; position:fixed; z-index:10000; padding-top:60px; left:0; top:0; width:100%; height:100%; overflow:auto; background-color:rgba(15,23,42,0.95); backdrop-filter:blur(10px); -webkit-backdrop-filter:blur(10px); transition: var(--transition);">
  <span class="close" style="position:absolute; top:20px; right:30px; color:#ffffff; font-size:42px; font-weight:bold; cursor:pointer; transition: var(--transition);">&times;</span>
  <img class="modal-content" id="img01" style="margin:auto; display:block; width:92%; max-width:850px; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); animation: zoom 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);">
  <div id="caption" style="margin:20px auto; display:block; width:80%; max-width:700px; text-align:center; color:#cbd5e1; font-family: var(--font-body); font-weight:600; font-size:1.05rem;">Dokumentasi Foto Kegiatan</div>
</div>
';
    })(),
    'extra_js'    => '
<script>
  let modal     = document.getElementById("myModal");
  let modalImg  = document.getElementById("img01");
  let span      = document.getElementsByClassName("close")[0];

  function bukaModal(img) { 
    modal.style.display = "block"; 
    modalImg.src = img.src; 
  }
  
  span.onclick = function() { 
    modal.style.display = "none"; 
  }
  
  modal.onclick = function(e) {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  }

  let selectBox   = document.getElementById("tema_gambar");
  let tampilGambar = document.getElementById("tampilGambar");

  selectBox.addEventListener("change", function() {
    let selectedValue = selectBox.options[selectBox.selectedIndex].value;
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        let response = JSON.parse(xhr.responseText);
        tampilGambar.innerHTML = "";
        response.forEach(e => {
          tampilGambar.innerHTML += `
            <figure class="wp-block-image size-large" style="margin: 0; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm); border: 1px solid var(--border-light); cursor: pointer; transition: var(--transition);" onmouseover="this.style.transform=\'scale(1.03) translateY(-4px)\'; this.style.boxShadow=\'var(--shadow-md)\';" onmouseout="this.style.transform=\'scale(1) translateY(0)\'; this.style.boxShadow=\'var(--shadow-sm)\';">
              <img onclick="bukaModal(this)" decoding="async" src="' . base_url('uploads/') . '${e["gambar_nama"]}" alt="" style="width: 100%; height: 220px; object-fit: cover; display: block; transition: var(--transition);" />
            </figure>`;
        });
      }
    };
    xhr.open("GET", "' . site_url('galeri/get-gambar?id=') . '" + selectedValue, true);
    xhr.send();
  });
</script>
',
]);
