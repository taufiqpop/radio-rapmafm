<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rapmaband extends Migration
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
            'created_at' => [
                'type'       => 'DATETIME',
            ],
            'tahun' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('tahun');
        $this->forge->createTable('rapmaband');
    }

    public function down()
    {
        $this->forge->dropTable('rapmaband');
    }
}
