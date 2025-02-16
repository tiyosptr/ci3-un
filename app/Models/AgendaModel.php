<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table = 'agenda'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key
    protected $allowedFields = ['nomor', 'sifat', 'lampiran_surat', 'judul', 'tanggal', 'tempat', 'status','lampiran', 'catatan','absensi','notulen','jumlah_peserta']; // Field yang diizinkan
}