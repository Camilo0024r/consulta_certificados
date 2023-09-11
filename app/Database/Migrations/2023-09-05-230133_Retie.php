<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Retie extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'certificado' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => false,
            ],

            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],

            'capacitacion' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],

            'fecha' => [
                'type' => 'TIMESTAMP',
            ],

        ]);

        $this->forge->addKey('certificado');
        $this->forge->createTable('retie');
    }

    public function down()
    {
        $this->forge->dropTable('retie');
    }
}
