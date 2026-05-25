<?php

namespace App\Models;

use CodeIgniter\Model;

class GambarModel extends Model
{
    protected $table      = 'gambar';
    protected $primaryKey = 'gambar_id';
    protected $allowedFields = ['id_berita', 'gambar_nama'];

    /**
     * Ambil semua gambar beserta judul berita
     */
    public function getAll()
    {
        return $this->db->query(
            "SELECT g.*, b.berita_judul
             FROM gambar g
             LEFT JOIN berita b ON g.id_berita = b.berita_id
             ORDER BY g.gambar_id DESC"
        )->getResultArray();
    }

    /**
     * Ambil gambar berdasarkan ID berita
     */
    public function getByBeritaId($beritaId)
    {
        return $this->where('id_berita', $beritaId)->findAll();
    }

    /**
     * Ambil satu gambar berdasarkan ID
     */
    public function getById($id)
    {
        return $this->where('gambar_id', $id)->first();
    }

    /**
     * Tambah gambar baru
     */
    public function tambah($data)
    {
        return $this->insert([
            'id_berita'   => $data['id_berita'],
            'gambar_nama' => $data['gambar_nama'],
        ]);
    }

    /**
     * Ubah gambar
     */
    public function ubah($id, $data)
    {
        return $this->update($id, $data);
    }

    /**
     * Hapus gambar
     */
    public function hapus($id)
    {
        return $this->delete($id);
    }
}
