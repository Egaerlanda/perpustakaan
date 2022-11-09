<?php

namespace App\Database\Seeds;

use App\Models\StokKoleksiModel;
use CodeIgniter\Database\Seeder;

class StokKoleksiSeeder extends Seeder
{
    public function run()
    {
        $id = (new StokKoleksiModel())->insert([
            'tgl_awal'      =>'',
            'tgl_akhir'     =>'',
            'koleksi_id'    =>'',
            'anggota_id'    =>'',
            'status_pesan'  =>'',
        ]);
        echo"hasil id =$id";
    }
}
