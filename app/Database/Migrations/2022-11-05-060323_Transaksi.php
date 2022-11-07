<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                     => ['type' => 'int', 'constraint'=> 10, 'null' =>false, 'unsigned' =>true, 'auto_increment' =>true],
            'tgl_pinjam'             => ['type' => 'date', 'null'=>true],
            'tgl_harus_kembali'      => ['type' => 'date', 'null'=>true],
            'tgl_kembali'            => ['type' => 'datetime', 'null'=>true],
            'anggota_id'             => ['type' => 'int', 'constraint'=>10, 'null'=>false, 'unsigned'=>true],
            'stok_koleksi_id'        => ['type' => 'int', 'constraint'=>10, 'null'=>false, 'unsigned'=>true],
            'pustakawan_id'          => ['type' => 'int', 'constraint'=>10, 'null'=>false, 'unsigned'=>true],
            'kembali_pustakawan_id'  => ['type' => 'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true],
            'denda'                  => ['type' => 'double', 'null'=>false, 'unsigned'=>true],
            'status_trx'             => ['type' => 'enum("P","K","R","H")', 'null'=>false],
            'catatan'                => ['type' => 'text', 'null'=>true],
        ]);
        //$this->forge->addPrimaryKey('id');
        //$this->forge->addForeignKey('anggota_id', 'stok_koleksi_id', 'pustakawan_id', 'kembali_pustakawan_id');
        //$this->forge->createTable('Transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('Transaksi');
    }
}
