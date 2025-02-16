<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table = 'agenda'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key
    protected $allowedFields = ['nomor', 'sifat', 'lampiran', 'judul', 'tanggal', 'tempat', 'status','absensi','notulen']; // Field yang diizinkan
}