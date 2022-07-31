<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeleksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seleksi')->insert([
            [
                'id_cities' => 181,
                'peminatan' => 'Otomotif Service Sepeda Motor Ringan',
                'status' => 'Calon Peserta',
                'nama_pelatihan' => 'pelatihan sepeda motor bandung',
            ],
        ]);
    }
}
