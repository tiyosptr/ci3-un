<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAgendaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nomor' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'sifat' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'lampiran' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'absensi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'notulen' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'tempat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'default' => 'Terjadwal', // Set default status
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true); // Set id sebagai primary key
        $this->forge->createTable('agenda'); // Buat tabel
    }

    public function down()
    {
        $this->forge->dropTable('agenda'); // Hapus tabel jika migrasi dibatalkan
    }
}