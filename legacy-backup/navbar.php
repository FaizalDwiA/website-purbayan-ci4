<?php $nama_file = basename($_SERVER["PHP_SELF"]); ?>

<header class="alignfull site-header wp-block-template-part">
    <div class="wp-block-group alignfull header-top-menu has-bg-light-background-color has-background is-content-justification-right is-nowrap is-layout-flex wp-container-3 wp-block-group-is-layout-flex" style="
    border-bottom-color: var(--wp--preset--color--light-gray);
    border-bottom-width: 1px;
    margin-top: 0;
    margin-bottom: 0;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    ">
        <nav style="font-size: 14px; line-height: 2.6; text-transform: none" class="has-text-color has-black-color items-justified-right alignfull top-menu social-menu wp-block-navigation has-nunito-font-family is-content-justification-right is-layout-flex wp-container-2 wp-block-navigation-is-layout-flex" aria-label="Top Menu">
            <ul class="wp-block-navigation__container">
                <li style="font-size: 14px" class="wp-block-navigation-item wp-block-navigation-link">
                    <a class="wp-block-navigation-item__content" href="index.php"><span class="wp-block-navigation-item__label">Home</span></a>
                </li>
                <li style="font-size: 14px" class="wp-block-navigation-item wp-block-navigation-link">
                    <a class="wp-block-navigation-item__content" href="tentang.php"><span class="wp-block-navigation-item__label">Tentang</span></a>
                </li>
                <li style="font-size: 14px" class="wp-block-navigation-item wp-block-navigation-link">
                    <a class="wp-block-navigation-item__content" href="program.php"><span class="wp-block-navigation-item__label">Program</span></a>
                </li>
                <li style="font-size: 14px" class="wp-block-navigation-item wp-block-navigation-link">
                    <a class="wp-block-navigation-item__content" href="struktur.php"><span class="wp-block-navigation-item__label">Struktur Organisasi</span></a>
                </li>
                <li style="font-size: 14px" class="wp-block-navigation-item wp-block-navigation-link">
                    <a class="wp-block-navigation-item__content" href="berita.php"><span class="wp-block-navigation-item__label">Berita</span></a>
                </li>
                <li style="font-size: 14px" class="wp-block-navigation-item wp-block-navigation-link">
                    <a class="wp-block-navigation-item__content" href="galeri.php"><span class="wp-block-navigation-item__label">Galeri</span></a>
                </li>
                <li style="font-size: 14px" class="wp-block-navigation-item wp-block-navigation-link">
                    <a class="wp-block-navigation-item__content" href="kontak.php"><span class="wp-block-navigation-item__label">Kontak</span></a>
                </li>
                <li style="font-size: 14px" class="wp-block-navigation-item wp-block-navigation-link">
                    <a class="wp-block-navigation-item__content" href="prestasi.php"><span class="wp-block-navigation-item__label">Prestasi</span></a>
                </li>
                <li style="font-size: 14px" class="wp-block-navigation-item wp-block-navigation-link">
                    <a target="_blank" rel="noopener noreferrer" class="wp-block-navigation-item__content" href="https://instagram.com/bungaraya_purbayan?igshid=MzRlODBiNWFlZA=="><span class="wp-block-navigation-item__label">Instagram</span></a>
                </li>
                <li style="font-size: 14px" class="wp-block-navigation-item wp-block-navigation-link">
                    <a target="_blank" rel="noopener noreferrer" class="wp-block-navigation-item__content" href="https://api.whatsapp.com/send?phone=+6289680638833
"><span class="wp-block-navigation-item__label">Whatsapp</span></a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="wp-block-columns header-main is-layout-flex wp-container-12 wp-block-columns-is-layout-flex" style="
    margin-top: 0;
    margin-bottom: 0;
    padding-top: 0;
    padding-right: 24px;
    padding-bottom: 24px;
    padding-left: 24px;
    ">
        <div class="wp-block-column is-vertically-aligned-center header-logo is-layout-flow wp-block-column-is-layout-flow" style="
        padding-top: 0;
        padding-right: 0;
        padding-bottom: 0;
        padding-left: 0;
        flex-basis: 25%;
    ">
            <div class="wp-block-group is-nowrap is-layout-flex wp-container-4 wp-block-group-is-layout-flex" style="padding-top: 12px; padding-bottom: 12px">
                <div style="
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
        " class="alignleft wp-block-site-logo">
                    <a href="index.php" class="custom-logo-link" rel="home" aria-current="page"><img src="assets/logo/logo-panjang.png" class="custom-logo" alt="Proklim Purbayan" decoding="async" sizes="(max-width: 48px) 100vw, 48px" width="1000" height="53" /></a>
                </div>

                <h1 style="
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            margin-top: 0;
            margin-right: 0;
            margin-bottom: 0;
            margin-left: 0;
            font-size: clamp(
            22.041px,
            1.378rem + ((1vw - 3.2px) * 1.269),
            36px
            );
            font-style: normal;
            font-weight: 400;
            text-decoration: none;
            text-transform: none;
            letter-spacing: 0px;
        " class="has-text-align-left has-text-color has-black-color logo-text wp-block-site-title has-nunito-font-family">
                </h1>
            </div>
        </div>

        <style>
            .opsi {
                position: absolute;
                z-index: 9;
                background-color: #eaeaea;
                width: 100%;
                top: 50%;
                border-left: 1px solid #696969;
                border-right: 1px solid #696969;
                border-bottom: 1px solid #696969;
                box-sizing: border-box;
                display: none;
            }

            .opsi li {
                list-style: none;
                padding: 10px;
                margin-bottom: 10px;
                cursor: pointer;
            }

            .opsi li:hover {
                background-color: #888;
                color: #fff;
                font-weight: bold;
                transition: .3s;
            }

            .opsi ul a {
                text-decoration: none;
            }
        </style>

        <div class="wp-block-column is-vertically-aligned-center header-search is-layout-flow wp-block-column-is-layout-flow" style="
        padding-top: 0;
        padding-right: 0;
        padding-bottom: 0;
        padding-left: 0;
        flex-basis: 70%;
        position: relative;
    ">
            <form method="post" action="" class="wp-block-search__button-outside wp-block-search__icon-button wp-block-search">
                <label for="search" class="wp-block-search__label screen-reader-text cari">Search</label>
                <div class="wp-block-search__inside-wrapper">
                    <input type="search" autocomplete="off" id="search" class="wp-block-search__input" name="cari" placeholder="Pencarian...." required="" /><input type="hidden" name="" /><button type="submit" class="wp-block-search__button has-icon wp-element-button" aria-label="Search" style="background: var(--wp--preset--gradient--lime-light);" />
                    <svg class="search-icon" viewBox="0 0 24 24" width="24" height="24">
                        <path d="M13 5c-3.3 0-6 2.7-6 6 0 1.4.5 2.7 1.3 3.7l-3.8 3.8 1.1 1.1 3.8-3.8c1 .8 2.3 1.3 3.7 1.3 3.3 0 6-2.7 6-6S16.3 5 13 5zm0 10.5c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5 4.5 2 4.5 4.5-2 4.5-4.5 4.5z"></path>
                    </svg>
                </div>
            </form>

            <?php

            $opsi = tampil("SELECT * FROM berita");

            ?>

            <div class="opsi">
                <ul>
                    <?php foreach ($opsi as $o) : ?>
                        <!-- <a href="berita.php?id=<?= $o["berita_id"]; ?>"> -->
                        <li class="opsiPilihan"><?= $o["berita_judul"]; ?></li>
                        <!-- </a> -->
                    <?php endforeach; ?>
                    <li class="tdk" style="display: none;">Tidak Ditemukan</li>
                </ul>
            </div>
        </div>

        <script>
            let search = document.getElementById("search");
            let opsi = document.querySelector(".opsi");
            let pilihan = document.querySelectorAll(".opsiPilihan");
            let tdk = opsi.querySelector(".tdk");

            search.addEventListener("focus", function(e) {
                opsi.style.display = "block";
            });

            search.addEventListener("blur", function() {
                setTimeout(() => {
                    opsi.style.display = "none";
                }, 200);
            });

            let a = 0;

            pilihan.forEach(e => {
                e.addEventListener("click", function() {
                    search.value = e.textContent.trim();
                });
            });

            search.addEventListener("keyup", function() {
                pilihan.forEach((e, i) => {
                    if (e.textContent.toLocaleLowerCase().indexOf(search.value.toLocaleLowerCase()) > -1) {
                        e.style.display = "block";
                        a++;
                    } else {
                        e.style.display = "none";
                    }
                });

                if (a > 0) {
                    tdk.style.display = "none";
                } else {
                    tdk.style.display = "block";
                }

                a = 0;
            });
        </script>

        <div class="wp-block-column is-vertically-aligned-center header-icons is-content-justification-right is-layout-constrained wp-container-11 wp-block-column-is-layout-constrained" style="
        padding-top: 0;
        padding-right: 0;
        padding-bottom: 0;
        padding-left: 0;
        flex-basis: 5%;
    ">
            <div class="wp-block-group is-content-justification-right is-nowrap is-layout-flex wp-container-10 wp-block-group-is-layout-flex" style="padding-top: 12px; padding-bottom: 12px">
                <div data-block-name="woocommerce/customer-account" data-display-style="icon_only" data-icon-class="wc-block-customer-account__account-icon" class="wp-block-woocommerce-customer-account">
                    <a href="login.php">
                        <svg class="wc-block-customer-account__account-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                            <path d="M8.00009 8.34785C10.3096 8.34785 12.1819 6.47909 12.1819 4.17393C12.1819 1.86876 10.3096 0 8.00009 0C5.69055
            0 3.81824 1.86876 3.81824 4.17393C3.81824 6.47909 5.69055 8.34785 8.00009 8.34785ZM0.333496 15.6522C0.333496
            15.8444 0.489412 16 0.681933 16H15.3184C15.5109 16 15.6668 15.8444 15.6668 15.6522V14.9565C15.6668 12.1428
            13.7821 9.73911 10.0912 9.73911H5.90931C2.21828 9.73911 0.333645 12.1428 0.333645 14.9565L0.333496 15.6522Z" fill="currentColor"></path>
                        </svg><span class="label"></span>
                    </a>
                </div>

                <nav class="is-responsive items-justified-center menu-mobile-button wp-block-navigation is-content-justification-center is-layout-flex wp-container-9 wp-block-navigation-is-layout-flex" aria-label="Top Menu 2">
                    <button aria-haspopup="true" aria-label="Open menu" class="wp-block-navigation__responsive-container-open always-shown" data-micromodal-trigger="modal-8">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M5 5v1.5h14V5H5zm0 7.8h14v-1.5H5v1.5zM5 19h14v-1.5H5V19z"></path>
                        </svg>
                    </button>
                    <div class="wp-block-navigation__responsive-container hidden-by-default" id="modal-8">
                        <div class="wp-block-navigation__responsive-close" tabindex="-1" data-micromodal-close="">
                            <div class="wp-block-navigation__responsive-dialog" aria-label="Menu">
                                <button aria-label="Close menu" data-micromodal-close="" class="wp-block-navigation__responsive-container-close">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false">
                                        <path d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"></path>
                                    </svg>
                                </button>
                                <div class="wp-block-navigation__responsive-container-content" id="modal-8-content">
                                    <ul class="wp-block-navigation__container">

                                        <li class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="index.php"><span class="wp-block-navigation-item__label"><i style="margin-right: 1rem;" class="fas fa-home"></i>Home</span></a>
                                        </li>
                                        <li class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="program.php"><span class="wp-block-navigation-item__label"><i style="margin-right: 1rem;" class="fas fa-users"></i>Program</span></a>
                                        </li>
                                        <li class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="tentang.php"><span class="wp-block-navigation-item__label"><i style="margin-right: 1rem;" class="fas fa-address-card"></i>Tentang</span></a>
                                        </li>
                                        <li class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="struktur.php"><span class="wp-block-navigation-item__label"><i style="margin-right: 1rem;" class="fa-solid fa-network-wired"></i>Struktur Organisasi</span></a>
                                        </li>
                                        <li class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="berita.php"><span class="wp-block-navigation-item__label"><i style="margin-right: 1rem;" class="fa-regular fa-newspaper"></i>Berita</span></a>
                                        </li>
                                        <li class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="galeri.php"><span class="wp-block-navigation-item__label"><i style="margin-right: 1rem;" class="fas fa-images"></i>Galeri</span></a>
                                        </li>
                                        <li class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="kontak.php"><span class="wp-block-navigation-item__label"><i style="margin-right: 1rem;" class="fas fa-address-book"></i>Kontak</span></a>
                                        </li>
                                        <li class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="prestasi.php"><span class="wp-block-navigation-item__label"><i style="margin-right: 1rem;" class="fas fa-solid fa-trophy"></i>Prestasi</span></a>
                                        </li>
                                        <li class="wp-block-navigation-item wp-block-navigation-link">
                                            <a href="http://" target="_blank" rel="noopener noreferrer"></a>
                                            <a class="wp-block-navigation-item__content" target="_blank" rel="noopener noreferrer" href="https://instagram.com/bungaraya_purbayan?igshid=MzRlODBiNWFlZA=="><span class="wp-block-navigation-item__label"><i style="margin-right: 1rem;" class="fa-brands fa-square-instagram"></i>Instagram</span></a>
                                        </li>
                                        <li class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="https://api.whatsapp.com/send?phone=+6289680638833" target="_blank" rel="noopener noreferrer"><span class="wp-block-navigation-item__label"><i style="margin-right: 1rem;" class="fa-brands fa-whatsapp"></i>Whatsaap</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <?php $nama_file = basename($_SERVER["PHP_SELF"]); ?>
    <?php if ($nama_file == "index.php" || $nama_file ==  "posyandu.php" || $nama_file ==  "kantin.php" || $nama_file ==  "bank-sampah.php") : ?>
        <div class="wp-block-group alignfull header-bottom-menu is-layout-constrained wp-container-15 wp-block-group-is-layout-constrained" style="
    border-top-color: var(--wp--preset--color--light-gray);
    border-top-width: 1px;
    border-bottom-color: var(--wp--preset--color--light-gray);
    border-bottom-width: 1px;
    margin-top: 0;
    margin-bottom: 0;
    padding-top: 12px;
    padding-right: 12px;
    padding-bottom: 12px;
    padding-left: 12px;
    ">
            <nav style="
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
    " class="has-text-color has-black-color is-responsive items-justified-space-between alignfull wp-block-navigation has-nunito-font-family is-content-justification-space-between is-layout-flex wp-container-14 wp-block-navigation-is-layout-flex" aria-label="Category Menu">
                <button aria-haspopup="true" aria-label="Open menu" class="wp-block-navigation__responsive-container-open" data-micromodal-trigger="modal-13">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M5 5v1.5h14V5H5zm0 7.8h14v-1.5H5v1.5zM5 19h14v-1.5H5V19z"></path>
                    </svg>
                </button>
                <div class="wp-block-navigation__responsive-container" id="modal-13">
                    <div class="wp-block-navigation__responsive-close" tabindex="-1" data-micromodal-close="">
                        <div class="wp-block-navigation__responsive-dialog" aria-label="Menu">
                            <button aria-label="Close menu" data-micromodal-close="" class="wp-block-navigation__responsive-container-close">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false">
                                    <path d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"></path>
                                </svg>
                            </button>
                            <div class="wp-block-navigation__responsive-container-content" id="modal-13-content">
                                <?php if ($nama_file == "index.php") : ?>
                                    <ul class="wp-block-navigation__container">
                                        <li style="font-size: 13px" class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="#Home"><span class="wp-block-navigation-item__label">Home</span></a>
                                        </li>
                                        <li style="font-size: 13px" class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="#program"><span class="wp-block-navigation-item__label">Program</span></a>
                                        </li>
                                        <li style="font-size: 13px" class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="#tentang"><span class="wp-block-navigation-item__label">Tentang</span></a>
                                        </li>
                                        <li style="font-size: 13px" class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="#struktur"><span class="wp-block-navigation-item__label">Struktur Organisasi</span></a>
                                        </li>
                                        <li style="font-size: 13px" class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="#berita"><span class="wp-block-navigation-item__label">Berita</span></a>
                                        </li>
                                        <li style="font-size: 13px" class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="#galeri"><span class="wp-block-navigation-item__label">Galeri</span></a>
                                        </li>
                                        <li style="font-size: 13px" class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="#kontak"><span class="wp-block-navigation-item__label">kontak</span></a>
                                        </li>
                                    </ul>
                                <?php elseif ($nama_file == "posyandu.php" || $nama_file == "kantin.php" || $nama_file ==  "bank-sampah.php") : ?>
                                    <ul class="wp-block-navigation__container">
                                        <li style="font-size: 13px" class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="bank-sampah.php"><span class="wp-block-navigation-item__label">Bank Sampah</span></a>
                                        </li>
                                        <li style="font-size: 13px" class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="kantin.php"><span class="wp-block-navigation-item__label">Kantin</span></a>
                                        </li>
                                        <li style="font-size: 13px" class="wp-block-navigation-item wp-block-navigation-link">
                                            <a class="wp-block-navigation-item__content" href="posyandu.php"><span class="wp-block-navigation-item__label">Posyandu</span></a>
                                        </li>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    <?php else : ?>
        <!-- <hr class="wp-block-separator has-text-color has-light-gray-color has-alpha-channel-opacity has-light-gray-background-color has-background is-style-wide"> -->
    <?php endif; ?>
</header>