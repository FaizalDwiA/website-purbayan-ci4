<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BeritaModel;

class Berita extends BaseController
{
    protected $beritaModel;

    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
    }

    /**
     * Halaman daftar berita admin
     */
    public function index(): string
    {
        $data = [
            'title'  => 'Manajemen Berita - Admin',
            'berita' => $this->beritaModel->getAll(),
        ];
        return view('admin/berita/index', $data);
    }

    /**
     * Tambah berita baru
     */
    public function tambah()
    {
        $judul = $this->request->getPost('berita-judul');
        $teks  = $this->request->getPost('berita-teks');

        // Konversi newline ke <br>
        $teks = nl2br($teks);

        $this->beritaModel->tambah([
            'berita_judul' => $judul,
            'berita_teks'  => $teks,
        ]);

        return redirect()->to(base_url('admin/berita'))->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Ubah berita
     */
    public function ubah()
    {
        $id    = $this->request->getPost('id');
        $judul = $this->request->getPost('ubah-berita-judul');
        $teks  = $this->request->getPost('ubah-berita-teks');

        // Konversi newline ke <br>
        $teks = nl2br($teks);

        $this->beritaModel->ubah($id, [
            'berita_judul' => $judul,
            'berita_teks'  => $teks,
        ]);

        return redirect()->to(base_url('admin/berita'))->with('success', 'Berita berhasil diubah!');
    }

    /**
     * Hapus berita
     */
    public function hapus($id)
    {
        $this->beritaModel->hapus($id);
        return redirect()->to(base_url('admin/berita'))->with('success', 'Berita berhasil dihapus!');
    }

    /**
     * AJAX: Get data berita berdasarkan ID
     */
    public function get($id)
    {
        $berita = $this->beritaModel->getById($id);
        return $this->response->setJSON([$berita]);
    }
}
