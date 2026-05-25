<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
    protected $table      = 'kontak';
    protected $primaryKey = 'kontak_id';
    protected $allowedFields = ['nomor', 'email', 'sosmed'];

    /**
     * Ambil data kontak (biasanya hanya 1 row)
     */
    public function getData()
    {
        return $this->first();
    }

    /**
     * Ambil semua data kontak
     */
    public function getAll()
    {
        return $this->findAll();
    }

    /**
     * Ubah kontak berdasarkan ID
     */
    public function ubah($id, $field, $value)
    {
        return $this->update($id, [$field => $value]);
    }
}
