<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Sesuaikan dengan nama tabel pengguna di database
    protected $primaryKey = 'id'; // Sesuaikan dengan primary key di tabel
    protected $allowedFields = ['username', 'password','last_login']; // Kolom yang bisa diisi

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
