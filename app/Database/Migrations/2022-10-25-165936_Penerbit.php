<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penerbit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    =>['type'=>'int', 'constraint'=>10, 'unsigned'=>true, 'auto_increment'=>true],
            'nama'  =>['type'=>'varchar', 'constraint'=>100, 'null'=>false],
            'kota'  =>['type'=>'varchar', 'constraint'=>100, 'null'=>true],
            'negara'=>['type'=>'varchar', 'constraint'=>100, 'null'=>false],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Penerbit');
    }

    public function down()
    {
        $this->forge->dropTable('Penerbit');
    }
}
