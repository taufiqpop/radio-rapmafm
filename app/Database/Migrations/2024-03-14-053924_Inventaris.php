<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inventaris extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'key' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'value' => [
                'type'       => 'TEXT',
            ],
            'kode' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kondisi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tahun' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('kode');
        $this->forge->addKey('kondisi');
        $this->forge->addKey('tahun');
        $this->forge->createTable('inventaris');
    }

    public function down()
    {
        $this->forge->dropTable('inventaris');
    }
}
