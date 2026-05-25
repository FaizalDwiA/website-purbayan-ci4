<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\GambarModel;
use App\Models\KontakModel;
use App\Models\PrestasiModel;

class Home extends BaseController
{
    protected $beritaModel;
    protected $gambarModel;
    protected $kontakModel;
    protected $prestasiModel;

    public function __construct()
    {
        $this->beritaModel   = new BeritaModel();
        $this->gambarModel   = new GambarModel();
        $this->kontakModel   = new KontakModel();
        $this->prestasiModel = new PrestasiModel();
    }

    /**
     * Halaman Beranda
     */
    public function index(): string
    {
        $data = [
            'title' => 'Proklim Purbayan - Organisasi Lingkungan untuk Keberlanjutan',
            'berita' => $this->beritaModel->getAll(),
        ];
        return view('home/index', $data);
    }

    /**
     * Halaman Tentang
     */
    public function tentang(): string
    {
        $data = [
            'title' => 'Tentang - Proklim Purbayan',
        ];
        return view('tentang/index', $data);
    }

    /**
     * Halaman Struktur Organisasi
     */
    public function struktur(): string
    {
        $data = [
            'title' => 'Struktur Organisasi - Proklim Purbayan',
        ];
        return view('struktur/index', $data);
    }

    /**
     * Halaman Program
     */
    public function program(): string
    {
        $data = [
            'title' => 'Program - Proklim Purbayan',
        ];
        return view('program/index', $data);
    }

    /**
     * Halaman Program Bank Sampah
     */
    public function bankSampah(): string
    {
        $data = [
            'title' => 'Bank Sampah - Proklim Purbayan',
        ];
        return view('program/bank_sampah', $data);
    }

    /**
     * Halaman Program Kantin
     */
    public function kantin(): string
    {
        $data = [
            'title' => 'Kantin Bunga Raya - Proklim Purbayan',
        ];
        return view('program/kantin', $data);
    }

    /**
     * Halaman Program Posyandu
     */
    public function posyandu(): string
    {
        $data = [
            'title' => 'Posyandu Purbosari IX - Proklim Purbayan',
        ];
        return view('program/posyandu', $data);
    }

    /**
     * Halaman Program Posbindu
     */
    public function posbindu(): string
    {
        $data = [
            'title' => 'Posbindu PTM - Proklim Purbayan',
        ];
        return view('program/posbindu', $data);
    }

    /**
     * Halaman Berita (daftar)
     */
    public function berita(): string
    {
        $data = [
            'title'         => 'Berita - Proklim Purbayan',
            'list_berita'   => $this->beritaModel->getBeritaWithGambar(),
        ];
        return view('berita/index', $data);
    }

    /**
     * Halaman Detail Berita
     */
    public function beritaDetail($id): string
    {
        $berita = $this->beritaModel->getById($id);
        if (!$berita) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Berita tidak ditemukan.");
        }

        $gambar = $this->gambarModel->getByBeritaId($id);

        $data = [
            'title'  => $berita['berita_judul'] . ' - Proklim Purbayan',
            'berita' => $berita,
            'gambar' => $gambar,
            'isi'    => html_entity_decode($berita['berita_teks']),
        ];
        return view('berita/detail', $data);
    }

    /**
     * Halaman Galeri
     */
    public function galeri(): string
    {
        $judul_berita = $this->beritaModel->getAll();

        // Ambil gambar berita pertama sebagai default
        $berita_awal = !empty($judul_berita) ? $judul_berita[0]['berita_id'] : null;
        $gambar_awal = $berita_awal ? $this->gambarModel->getByBeritaId($berita_awal) : [];

        $data = [
            'title'        => 'Galeri - Proklim Purbayan',
            'judul_berita' => $judul_berita,
            'gambar_awal'  => $gambar_awal,
        ];
        return view('galeri/index', $data);
    }

    /**
     * Halaman Kontak
     */
    public function kontak(): string
    {
        $data = [
            'title'  => 'Kontak - Proklim Purbayan',
            'kontak' => $this->kontakModel->getData(),
        ];
        return view('kontak/index', $data);
    }

    /**
     * Halaman Prestasi
     */
    public function prestasi(): string
    {
        $data = [
            'title'   => 'Prestasi - Proklim Purbayan',
            'prestasi' => $this->prestasiModel->getAll(),
        ];
        return view('prestasi/index', $data);
    }

    /**
     * AJAX: Ambil gambar berdasarkan id berita (untuk galeri & berita)
     */
    public function getGambarAjax()
    {
        $berita_id = $this->request->getGet('id');
        if ($berita_id) {
            $gambar = $this->gambarModel->getByBeritaId($berita_id);
        } else {
            $gambar = $this->gambarModel->getAll();
        }
        return $this->response->setJSON($gambar);
    }
}
