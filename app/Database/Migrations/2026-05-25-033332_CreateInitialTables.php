<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInitialTables extends Migration
{
    public function up()
    {
        // 1. User Table
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 6,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'user_password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255', // Expanded from 60 to 255 for robust password hashing
            ],
            'reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('user');

        // 2. Berita Table
        $this->forge->addField([
            'berita_id' => [
                'type'           => 'INT',
                'constraint'     => 6,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'berita_judul' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'berita_teks' => [
                'type' => 'TEXT',
            ],
            'reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('berita_id', true);
        $this->forge->createTable('berita');

        // 3. Gambar Table
        $this->forge->addField([
            'gambar_id' => [
                'type'           => 'INT',
                'constraint'     => 6,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'gambar_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'id_berita' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('gambar_id', true);
        $this->forge->createTable('gambar');

        // 4. Kontak Table
        $this->forge->addField([
            'kontak_id' => [
                'type'           => 'INT',
                'constraint'     => 6,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nomor' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '70',
            ],
            'sosmed' => [
                'type'       => 'VARCHAR',
                'constraint' => '70',
            ],
            'reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('kontak_id', true);
        $this->forge->createTable('kontak');

        // 5. Prestasi Table
        $this->forge->addField([
            'prestasi_id' => [
                'type'           => 'INT',
                'constraint'     => 6,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'prestasi_judul' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'prestasi_kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'prestasi_gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => '70',
            ],
            'reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('prestasi_id', true);
        $this->forge->createTable('prestasi');
    }

    public function down()
    {
        $this->forge->dropTable('user', true);
        $this->forge->dropTable('berita', true);
        $this->forge->dropTable('gambar', true);
        $this->forge->dropTable('kontak', true);
        $this->forge->dropTable('prestasi', true);
    }
}
