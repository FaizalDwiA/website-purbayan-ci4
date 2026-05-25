<?php
require "functions/functions.php";
include("search.php");
$get_judul_berita = tampil("SELECT berita_id,berita_judul FROM berita");
$get_berita_awal = tampil("SELECT MIN(berita_id) AS id_berita_terkecil FROM berita;")[0];

$get_gambar_awal = tampil("SELECT gambar_nama FROM gambar WHERE id_berita = " . $get_berita_awal["id_berita_terkecil"]);

?>
<!DOCTYPE html>
<html class="yes-js js_active js" lang="en-US">

<head>
  <title>Galeri - Proklim Purbayan</title>

  <?php include("pages/style/index.php"); ?>

  <style>
    .wp-block-gallery.has-nested-images.columns-default.is-cropped.is-layout-flex.wp-block-gallery-is-layout-flex {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
    }

    @media(max-width: 600px) {
      .wp-block-gallery.has-nested-images.columns-default.is-cropped.is-layout-flex.wp-block-gallery-is-layout-flex {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body class="home page-template page-template-template-blank page page-id-12 wp-custom-logo wp-embed-responsive theme-organic-rialto woocommerce-block-theme-has-button-styles woocommerce-js dokan-theme-organic-rialto">
  <a class="skip-link screen-reader-text" href="#wp--skip-link--target">Skip to content</a>
  <div class="wp-site-blocks">
    <?php include("navbar.php"); ?>

    <main class="wp-block-group alignfull site-main is-layout-constrained wp-block-group-is-layout-constrained" id="wp--skip-link--target">
      <div class="entry-content alignfull wp-block-post-content is-layout-constrained wp-block-post-content-is-layout-constrained">

        <hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide" style="max-width: 100vw; border: 1px solid #00d084;">
        <style>
          .custom-select {
            display: inline-block;
            width: 100%;
            height: calc(2.25rem + 2px);
            padding: .375rem 1.75rem .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            vertical-align: middle;
            background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") right .75rem center/8px 10px no-repeat;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .075);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
          }
        </style>

        <div class="form-group">
          <h3>Pilih Tema</h3>
          <select id="tema_gambar" value="<?= $get_judul_berita[0]["berita_id"]; ?>" class="custom-select">
            <?php foreach ($get_judul_berita as $judul) : ?>
              <option value="<?= $judul["berita_id"]; ?>"><?= $judul["berita_judul"]; ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide" style="max-width: 100vw; border: 1px solid #00d084;">

        <style>
          .wp-image-1828 {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
          }

          .wp-image-1828:hover {
            opacity: 0.7;
          }

          /* The Modal (background) */
          .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
            margin-top: 0;
          }

          /* Modal Content (Image) */
          .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
          }

          /* Caption of Modal Image (Image Text) - Same Width as the Image */
          #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
          }

          /* Add Animation - Zoom in the Modal */
          .modal-content,
          #caption {
            animation-name: zoom;
            animation-duration: 0.6s;
          }

          @keyframes zoom {
            from {
              transform: scale(0)
            }

            to {
              transform: scale(1)
            }
          }

          /* The Close Button */
          .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
          }

          .close:hover,
          .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
          }

          /* 100% Image Width on Smaller Screens */
          @media only screen and (max-width: 700px) {
            .modal-content {
              width: 100%;
            }
          }
        </style>
        <figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-22 is-layout-flex wp-block-gallery-is-layout-flex" id="tampilGambar">
          <?php foreach ($get_gambar_awal as $gambar) : ?>
            <figure class="wp-block-image size-large">
              <img decoding="async" data-id="1828" onclick="bukaModal(this)" src="assets/img/upload/<?= $gambar["gambar_nama"]; ?>" alt="" class="wp-image-1828">
            </figure>
          <?php endforeach; ?>
        </figure>

        <div style="height: 60px" aria-hidden="true" class="wp-block-spacer"></div>

      </div>
    </main>

    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- The Close Button -->
      <span class="close">&times;</span>

      <!-- Modal Content (The Image) -->
      <img class="modal-content" id="img01">

      <!-- Modal Caption (Image Text) -->
      <div id="caption"></div>
    </div>

    <?php include("pages/footer/index.php"); ?>
  </div>

  <script>
    // Get the modal
    let modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    let img = document.querySelectorAll(".wp-image-1828");
    let modalImg = document.getElementById("img01");
    let captionText = document.getElementById("caption");

    function bukaModal(img) {
      modal.style.display = "block";
      modalImg.src = img.src;
      // captionText.innerHTML = img.alt;
    }

    // Get the <span> element that closes the modal
    let span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // Select
    let selectBox = document.getElementById("tema_gambar");
    let tampilGambar = document.getElementById("tampilGambar");

    selectBox.addEventListener("change", function() {
      let selectedValue = selectBox.options[selectBox.selectedIndex].value;
      // console.log(selectedValue);

      // Membuat request AJAX untuk mengambil gambar sesuai dengan tema
      let xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            let response = JSON.parse(xhr.responseText);
            // console.log(response);

            // Hapus gambar yang ditampilkan sebelumya
            tampilGambar.innerHTML = "";

            response.forEach(e => {
              tampilGambar.innerHTML += `<figure class="wp-block-image size-large">
                                                <img onclick="bukaModal(this)" decoding="async" data-id="1828" src="assets/img/upload/${e["gambar_nama"]}" alt="" class="wp-image-1828">
                                              </figure>`;
            });

          } else {
            console.log("Terjadi kesalahan saat mengambil data gambar");
          }
        }
      };
      xhr.open("GET", "assets/data/get_gambar.php?id=" + selectedValue, true);
      xhr.send();
    });
  </script>

  <?php include("pages/script/index.php"); ?>
</body>

</html>