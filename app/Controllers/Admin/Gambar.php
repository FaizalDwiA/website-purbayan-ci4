<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GambarModel;
use App\Models\BeritaModel;

class Gambar extends BaseController
{
    protected $gambarModel;
    protected $beritaModel;

    public function __construct()
    {
        $this->gambarModel = new GambarModel();
        $this->beritaModel = new BeritaModel();
    }

    /**
     * Halaman daftar gambar admin
     */
    public function index(): string
    {
        $data = [
            'title'  => 'Manajemen Gambar - Admin',
            'gambar' => $this->gambarModel->getAll(),
            'berita' => $this->beritaModel->getAll(),
        ];
        return view('admin/gambar/index', $data);
    }

    /**
     * Tambah gambar (upload multiple file)
     */
    public function tambah()
    {
        $berita_id = $this->request->getPost('berita');
        $files     = $this->request->getFileMultiple('gambar');

        if (!$files || empty($files)) {
            return redirect()->back()->with('error', 'Pilih gambar terlebih dahulu!');
        }

        foreach ($files as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $ekstensiValid = ['jpg', 'jpeg', 'png', 'webp'];
                $ekstensi = strtolower($file->getExtension());

                if (!in_array($ekstensi, $ekstensiValid)) {
                    return redirect()->back()->with('error', 'File yang diupload bukan gambar!');
                }

                $namaFileBaru = uniqid() . '.' . $ekstensi;
                $file->move(ROOTPATH . 'public/uploads', $namaFileBaru);

                $this->gambarModel->tambah([
                    'id_berita'   => $berita_id,
                    'gambar_nama' => $namaFileBaru,
                ]);
            }
        }

        return redirect()->to(base_url('admin/gambar'))->with('success', 'Gambar berhasil ditambahkan!');
    }

    /**
     * Ubah gambar
     */
    public function ubah()
    {
        $id        = $this->request->getPost('id');
        $id_berita = $this->request->getPost('berita');

        $file = $this->request->getFile('gambar');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Hapus file lama
            $gambarLama = $this->gambarModel->getById($id);
            $pathLama   = ROOTPATH . 'public/uploads/' . $gambarLama['gambar_nama'];
            if (file_exists($pathLama)) {
                unlink($pathLama);
            }

            $namaFileBaru = uniqid() . '.' . strtolower($file->getExtension());
            $file->move(ROOTPATH . 'public/uploads', $namaFileBaru);

            $this->gambarModel->ubah($id, [
                'id_berita'   => $id_berita,
                'gambar_nama' => $namaFileBaru,
            ]);
        } else {
            $this->gambarModel->ubah($id, ['id_berita' => $id_berita]);
        }

        return redirect()->to(base_url('admin/gambar'))->with('success', 'Gambar berhasil diubah!');
    }

    /**
     * Hapus gambar
     */
    public function hapus($id)
    {
        $gambar = $this->gambarModel->getById($id);
        if ($gambar) {
            $path = ROOTPATH . 'public/uploads/' . $gambar['gambar_nama'];
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $this->gambarModel->hapus($id);
        return redirect()->to(base_url('admin/gambar'))->with('success', 'Gambar berhasil dihapus!');
    }

    /**
     * AJAX: ambil gambar berdasarkan ID berita
     */
    public function getByBerita($beritaId)
    {
        $gambar = $this->gambarModel->getByBeritaId($beritaId);
        return $this->response->setJSON($gambar);
    }
}
