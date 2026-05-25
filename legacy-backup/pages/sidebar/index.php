<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="berita-admin.php" class="brand-link">
        <img src="assets/logo/logo-kotak.jpg" alt="Purbayan" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Proklim Purbayan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="berita-admin.php" class="nav-link <?= (basename($_SERVER["PHP_SELF"]) == "berita-admin.php") ? "active" : ""; ?>">
                        <i class="nav-icon fa-regular fa-newspaper"></i>
                        <p>
                            Berita
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="gambar-admin.php" class="nav-link <?= (basename($_SERVER["PHP_SELF"]) == "gambar-admin.php") ? "active" : ""; ?>">
                        <i class="nav-icon fa-regular fa-images"></i>
                        <p>
                            Gambar
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="kontak-admin.php" class="nav-link <?= (basename($_SERVER["PHP_SELF"]) == "kontak-admin.php") ? "active" : ""; ?>">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            Kontak
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="prestasi-admin.php" class="nav-link <?= (basename($_SERVER["PHP_SELF"]) == "prestasi-admin.php") ? "active" : ""; ?>">
                        <i class="nav-icon fa-solid fa-trophy"></i>
                        <p>
                            Prestasi
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="logout.php" class="nav-link bg-danger">
                        <i class="nav-icon fa fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>