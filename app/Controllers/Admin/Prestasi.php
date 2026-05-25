<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PrestasiModel;

class Prestasi extends BaseController
{
    protected $prestasiModel;

    public function __construct()
    {
        $this->prestasiModel = new PrestasiModel();
    }

    /**
     * Halaman daftar prestasi admin
     */
    public function index(): string
    {
        $data = [
            'title'   => 'Manajemen Prestasi - Admin',
            'prestasi' => $this->prestasiModel->getAll(),
        ];
        return view('admin/prestasi/index', $data);
    }

    /**
     * Tambah prestasi baru
     */
    public function tambah()
    {
        $judul    = $this->request->getPost('prestasi-judul');
        $kategori = $this->request->getPost('prestasi-kategori');
        $file     = $this->request->getFile('gambar');

        if (!$file || !$file->isValid()) {
            return redirect()->back()->with('error', 'Pilih gambar terlebih dahulu!');
        }

        $ekstensiValid = ['jpg', 'jpeg', 'png', 'webp'];
        $ekstensi      = strtolower($file->getExtension());
        if (!in_array($ekstensi, $ekstensiValid)) {
            return redirect()->back()->with('error', 'File yang diupload bukan gambar!');
        }

        $namaFileBaru = uniqid() . '.' . $ekstensi;
        $file->move(ROOTPATH . 'public/uploads', $namaFileBaru);

        $this->prestasiModel->tambah([
            'prestasi_judul'    => $judul,
            'prestasi_kategori' => $kategori,
            'prestasi_gambar'   => $namaFileBaru,
        ]);

        return redirect()->to(base_url('admin/prestasi'))->with('success', 'Prestasi berhasil ditambahkan!');
    }

    /**
     * Ubah prestasi
     */
    public function ubah()
    {
        $id       = $this->request->getPost('id');
        $judul    = $this->request->getPost('prestasi-judul');
        $kategori = $this->request->getPost('prestasi-kategori');

        $updateData = [
            'prestasi_judul'    => $judul,
            'prestasi_kategori' => $kategori,
        ];

        $file = $this->request->getFile('gambar');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Hapus file lama
            $prestasiLama = $this->prestasiModel->getById($id);
            $pathLama     = ROOTPATH . 'public/uploads/' . $prestasiLama['prestasi_gambar'];
            if (file_exists($pathLama)) {
                unlink($pathLama);
            }

            $namaFileBaru = uniqid() . '.' . strtolower($file->getExtension());
            $file->move(ROOTPATH . 'public/uploads', $namaFileBaru);
            $updateData['prestasi_gambar'] = $namaFileBaru;
        }

        $this->prestasiModel->ubah($id, $updateData);

        return redirect()->to(base_url('admin/prestasi'))->with('success', 'Prestasi berhasil diubah!');
    }

    /**
     * Hapus prestasi
     */
    public function hapus($id)
    {
        $prestasi = $this->prestasiModel->getById($id);
        if ($prestasi) {
            $path = ROOTPATH . 'public/uploads/' . $prestasi['prestasi_gambar'];
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $this->prestasiModel->hapus($id);
        return redirect()->to(base_url('admin/prestasi'))->with('success', 'Prestasi berhasil dihapus!');
    }

    /**
     * AJAX: Get prestasi by ID
     */
    public function get($id)
    {
        $prestasi = $this->prestasiModel->getById($id);
        return $this->response->setJSON([$prestasi]);
    }
}
