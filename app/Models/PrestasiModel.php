<?php

namespace App\Models;

use CodeIgniter\Model;

class PrestasiModel extends Model
{
    protected $table      = 'prestasi';
    protected $primaryKey = 'prestasi_id';
    protected $allowedFields = ['prestasi_judul', 'prestasi_kategori', 'prestasi_gambar'];

    /**
     * Ambil semua prestasi
     */
    public function getAll()
    {
        return $this->findAll();
    }

    /**
     * Ambil prestasi berdasarkan ID
     */
    public function getById($id)
    {
        return $this->where('prestasi_id', $id)->first();
    }

    /**
     * Tambah prestasi baru
     */
    public function tambah($data)
    {
        return $this->insert([
            'prestasi_judul'    => $data['prestasi_judul'],
            'prestasi_kategori' => $data['prestasi_kategori'],
            'prestasi_gambar'   => $data['prestasi_gambar'],
        ]);
    }

    /**
     * Ubah prestasi
     */
    public function ubah($id, $data)
    {
        return $this->update($id, $data);
    }

    /**
     * Hapus prestasi
     */
    public function hapus($id)
    {
        return $this->delete($id);
    }
}
