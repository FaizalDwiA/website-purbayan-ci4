<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['username', 'user_password'];

    /**
     * Cari user berdasarkan username
     */
    public function findByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
