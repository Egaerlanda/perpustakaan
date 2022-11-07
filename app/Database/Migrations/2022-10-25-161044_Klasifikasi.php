<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Klasifikasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    =>['type'=>'int', 'constraint'=>10, 'null'=>false, 'unsigned'=>true, 'auto_increment'=>true],
            'ddc'   =>['type'=>'varchar', 'constraint'=>12, 'null'=>false],
            'nama'  =>['type'=>'varchar', 'constraint'=>50, 'null'=>false],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Klasifikasi');
    }

    public function down()
    {
        $this->forge->dropTable('Klasifikasi');
    }
}
