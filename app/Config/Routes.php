<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// =====================================================================
// HALAMAN PUBLIK
// =====================================================================
$routes->get('/', 'Home::index');
$routes->get('tentang', 'Home::tentang');
$routes->get('struktur', 'Home::struktur');
$routes->get('program', 'Home::program');
$routes->get('program/bank-sampah', 'Home::bankSampah');
$routes->get('program/kantin', 'Home::kantin');
$routes->get('program/posyandu', 'Home::posyandu');
$routes->get('program/posbindu', 'Home::posbindu');
$routes->get('berita', 'Home::berita');
$routes->get('berita/(:num)', 'Home::beritaDetail/$1');
$routes->get('galeri', 'Home::galeri');
$routes->get('galeri/get-gambar', 'Home::getGambarAjax');
$routes->get('kontak', 'Home::kontak');
$routes->get('prestasi', 'Home::prestasi');

// =====================================================================
// AUTH
// =====================================================================
$routes->get('login', 'Auth::index');
$routes->post('login', 'Auth::proses');
$routes->get('logout', 'Auth::logout');

// =====================================================================
// HALAMAN ADMIN (dilindungi oleh AuthFilter)
// =====================================================================
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    // Dashboard
    $routes->get('/', 'Admin\Dashboard::index');

    // Berita
    $routes->get('berita', 'Admin\Berita::index');
    $routes->post('berita/tambah', 'Admin\Berita::tambah');
    $routes->post('berita/ubah', 'Admin\Berita::ubah');
    $routes->get('berita/hapus/(:num)', 'Admin\Berita::hapus/$1');
    $routes->get('berita/get/(:num)', 'Admin\Berita::get/$1');

    // Gambar
    $routes->get('gambar', 'Admin\Gambar::index');
    $routes->post('gambar/tambah', 'Admin\Gambar::tambah');
    $routes->post('gambar/ubah', 'Admin\Gambar::ubah');
    $routes->get('gambar/hapus/(:num)', 'Admin\Gambar::hapus/$1');
    $routes->get('gambar/get/(:num)', 'Admin\Gambar::getByBerita/$1');

    // Kontak
    $routes->get('kontak', 'Admin\Kontak::index');
    $routes->post('kontak/ubah', 'Admin\Kontak::ubah');

    // Prestasi
    $routes->get('prestasi', 'Admin\Prestasi::index');
    $routes->post('prestasi/tambah', 'Admin\Prestasi::tambah');
    $routes->post('prestasi/ubah', 'Admin\Prestasi::ubah');
    $routes->get('prestasi/hapus/(:num)', 'Admin\Prestasi::hapus/$1');
    $routes->get('prestasi/get/(:num)', 'Admin\Prestasi::get/$1');
});
