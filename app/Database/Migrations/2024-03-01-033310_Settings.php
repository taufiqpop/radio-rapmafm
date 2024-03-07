<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Settings extends Migration
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
            'owner' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'slogan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_mtalent' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_mtalent' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_medpart' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_medpart' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'ymail' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'gmail' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'twitter' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'facebook' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'instagram' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'youtube' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'spotify' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'whatsapp' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'blogger' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'line' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tiktok' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'streaming' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('settings');
    }

    public function down()
    {
        $this->forge->dropTable('settings');
    }
}
