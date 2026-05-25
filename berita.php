<?php

require "functions/functions.php";
include("search.php");


$get_berita_id = tampil("SELECT berita_id FROM berita");

// $data = tampil("SELECT * FROM gambar INNER JOIN berita ON berita.berita_id = gambar.id_berita");


// Menampilkan data sesuai dengan jumlah data dari berita
$get_gambar_berita = tampil("SELECT g.gambar_nama, b.berita_id, b.berita_judul, g.gambar_nama
				FROM berita b
				LEFT JOIN gambar g ON b.berita_id = g.id_berita
				GROUP BY b.berita_id");


if (isset($_GET["id"])) {
	$id = $_GET["id"];
} else {
	$id = $get_berita_id[0]["berita_id"];
}

$get_data_berita = tampil("SELECT berita_teks, berita_judul FROM berita WHERE berita_id = $id");
$isi = html_entity_decode($get_data_berita[0]["berita_teks"]);
$judul = $get_data_berita[0]["berita_judul"];

?>
<!DOCTYPE html>
<html class=" yes-js js_active js" lang="en-US">

<head>
	<title>Berita - Proklim Purbayan</title>
	<?php include("pages/style/index.php"); ?>

	<style>
		.wp-block-gallery.has-nested-images.columns-default.is-cropped.is-layout-flex.wp-block-gallery-is-layout-flex {
			display: grid;
			grid-template-columns: repeat(3, 1fr);

		}

		.wp-block-image {
			background-color: #000;
		}

		.wp-image {
			opacity: .3;
		}

		/* .wp-image:hover {
			cursor: pointer;
			opacity: .6;
		} */

		@media(max-width: 600px) {
			.wp-block-gallery.has-nested-images.columns-default.is-cropped.is-layout-flex.wp-block-gallery-is-layout-flex {
				grid-template-columns: 1fr;
			}
		}

		.slide-kiri {
			animation: keluar 1s forwards;
		}

		.slide-kanan {
			transform: translateX(100%);
			animation: masuk 1s forwards;
		}

		@keyframes keluar {
			from {
				opacity: .5;
				transform: translateX(0);
			}

			to {
				opacity: 0;
				transform: translateX(-100%);
			}
		}

		@keyframes masuk {
			from {
				opacity: 0;
				transform: translateX(100%);
			}

			to {
				opacity: .5;
				transform: translateX(0);
			}
		}
	</style>
</head>

<body class="post-template-default single single-post postid-1708 single-format-standard wp-custom-logo wp-embed-responsive theme-organic-rialto woocommerce-block-theme-has-button-styles woocommerce-js dokan-theme-organic-rialto">

	<a class="skip-link screen-reader-text" href="#wp--skip-link--target">Skip to content</a>
	<div class="wp-site-blocks">
		<?php include("navbar.php"); ?>

		<main class="wp-block-group alignfull site-main is-layout-constrained wp-block-group-is-layout-constrained" id="wp--skip-link--target">
			<?php if (isset($_GET["id"])) : ?>
				<section class="alignfull site-banner wp-block-template-part">
					<div class="wp-block-group has-lime-light-gradient-background has-background is-layout-constrained wp-block-group-is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
						<div class="wp-block-cover alignfull is-light" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
							<img id="gambar_berita" src="" class="slide-kanan wp-block-cover__image-background wp-post-image" alt="" decoding="async" loading="lazy" data-object-fit="cover" width="1800" height="1800" style="
							opacity: .5;
							transition: .5s;
							">
							<div class="wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow">
								<h2 style="font-style:normal;font-weight:600;" class="has-text-align-center has-text-color has-white-color wp-block-post-title has-huge-font-size"><?= $judul; ?></h2>
							</div>
						</div>
					</div>
				</section>
			<?php endif; ?>

			<!-- <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div> -->

			<div class="entry-content alignfull wp-block-post-content is-layout-constrained wp-block-post-content-is-layout-constrained">
				<!-- <p>Selamat datang di Proklim Purbayan!</p>

				<p><?= html_entity_decode($isi); ?></p> -->

				<hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide" style="max-width: 100vw; border: 1px solid #00d084;">

				<!-- kondisi ada/tidak id atau pencarian -->
				<?php if (isset($_GET["id"])) : ?>
					<p><?= $isi; ?></p>
				<?php else : ?>
					<style>
						.wp-block-image {
							position: relative;
						}

						.teks {
							position: absolute;
							display: flex;
							flex-direction: column;
							top: 50%;
							left: 50%;
							align-items: center;
							width: 80%;
							transform: translate(-50%, -50%);
						}

						.teks .judul {
							text-align: center;
							font-size: 20px;
							color: #fff;
						}
					</style>
					<figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-22 is-layout-flex wp-block-gallery-is-layout-flex">

						<?php foreach ($get_gambar_berita as $g) : ?>
							<?php if (isset($g["gambar_nama"])) : ?>
								<figure class="wp-block-image size-large">
									<!-- <a href=""> -->
									<img decoding="async" data-id="1828" src="assets/img/upload/<?= $g["gambar_nama"]; ?>" alt="" class="wp-image">
									<!-- </a> -->
									<div class="teks">
										<p class="judul"><?= $g["berita_judul"]; ?></p>
										<div class="wp-block-button">
											<a class="wp-block-button__link wp-element-button" href="berita.php?id=<?= $g["berita_id"]; ?>">Lihat</a>
										</div>
									</div>
								</figure>
							<?php endif; ?>
						<?php endforeach; ?>
					</figure>
				<?php endif; ?>

				<div style="height:48px" aria-hidden="true" class="wp-block-spacer"></div>
			</div>
		</main>


		<?php include("pages/footer/index.php"); ?>
	</div>

	<script>
		// Mendapatkan query string dari URL
		const queryString = window.location.search;
		const urlParams = new URLSearchParams(queryString);
		let gambar_berita = document.getElementById("gambar_berita");
		// Memeriksa apakah ada data dengan key tertentu

		let xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() {
			if (xhr.readyState === XMLHttpRequest.DONE) {
				if (xhr.status === 200) {
					let response = JSON.parse(xhr.responseText);
					let n = 0;
					// console.log(response[0]["gambar_nama"]);
					gambar_berita.src = `assets/img/upload/${response[0]["gambar_nama"]}`;
					console.log(response.length);
					setInterval(() => {
						if (n == response.length - 1) {
							n = 0;
						} else {
							n++;
						}
						console.log(n);
						setTimeout(() => {
							gambar_berita.classList.replace("slide-kanan", "slide-kiri");
						}, 8000);
						setTimeout(() => {
							gambar_berita.src = `assets/img/upload/${response[n]["gambar_nama"]}`;
						}, 8500);
						setTimeout(() => {
							gambar_berita.classList.replace("slide-kiri", "slide-kanan");
						}, 9000);
					}, 10000);
				} else {
					console.log("Terjadi kesalahan saat mengambil data gambar");
				}
			}
		};
		if (urlParams.has('id')) {
			// Data ditemukan
			const value = urlParams.get('id');
			console.log('Data ditemukan:', value);
			xhr.open("GET", "assets/data/get_gambar.php?id=" + value, true);
		} else {
			// Data tidak ditemukan
			xhr.open("GET", "assets/data/get_gambar.php", true);
		}
		xhr.send();
	</script>
	<?php include("pages/script/index.php"); ?>
</body>

</html>