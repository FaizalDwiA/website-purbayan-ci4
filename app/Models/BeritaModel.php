<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table      = 'berita';
    protected $primaryKey = 'berita_id';
    protected $allowedFields = ['berita_judul', 'berita_teks'];

    /**
     * Ambil semua berita
     */
    public function getAll()
    {
        return $this->findAll();
    }

    /**
     * Ambil berita berdasarkan ID
     */
    public function getById($id)
    {
        return $this->where('berita_id', $id)->first();
    }

    /**
     * Ambil berita beserta gambar pertamanya (untuk listing)
     */
    public function getBeritaWithGambar()
    {
        return $this->db->query(
            "SELECT b.berita_id, b.berita_judul, b.berita_teks, g.gambar_nama
             FROM berita b
             LEFT JOIN gambar g ON b.berita_id = g.id_berita
             GROUP BY b.berita_id
             ORDER BY b.berita_id DESC"
        )->getResultArray();
    }

    /**
     * Tambah berita baru
     */
    public function tambah($data)
    {
        return $this->insert([
            'berita_judul' => $data['berita_judul'],
            'berita_teks'  => $data['berita_teks'],
        ]);
    }

    /**
     * Ubah berita
     */
    public function ubah($id, $data)
    {
        return $this->update($id, [
            'berita_judul' => $data['berita_judul'],
            'berita_teks'  => $data['berita_teks'],
        ]);
    }

    /**
     * Hapus berita
     */
    public function hapus($id)
    {
        return $this->delete($id);
    }
}
