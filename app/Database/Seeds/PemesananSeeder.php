<?php

namespace App\Database\Seeds;

use App\Models\PemesananModel;
use CodeIgniter\Database\Seeder;

class PemesananSeeder extends Seeder
{
    public function run()
    {
        $id = (new PemesananModel())->insert([
            'tgl_awal'  => '',
            'tgl_akhir' => '',
            'koleksi_id'=> '',
            'anggota_id'=> '',
            'status_pesan' => '',


        ]);
        echo"hasil id =$id";
    }
}
