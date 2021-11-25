<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserFormulirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formulir')->insert([
            [
                'id_user' => 2,
                'id_provinces' => 12,
                'id_cities' => 181,
                'id_districts' => 2558,
                'id_villages' => 31285,
                'nama' => 'Pamungkas',
                'ttl' => 'Jakarta, 19 April 1999',
                'alamat' => 'Kampung Jeruk',
                'no_kk' => '',
                'no_ktp' => '',
                'jenis_kelamin' => 'Laki-laki',
                'pekerjaan' => 'Penyanyi',
                'no_hp' => '08321',
                'no_rek' => '',
                'bank' => '',
                'atas_nama' => '',
                'peminatan' => 'Otomotif Service Sepeda Motor Ringan'
            ],
            [
                'id_user' => 1,
                'id_provinces' => 12,
                'id_cities' => 185,
                'id_districts' => 2558,
                'id_villages' => 31285,
                'nama' => 'Jefrey',
                'ttl' => 'Jakarta, 19 April 1999',
                'alamat' => 'Kampung Jeruk',
                'no_kk' => '',
                'no_ktp' => '',
                'jenis_kelamin' => 'Laki-laki',
                'pekerjaan' => 'Penyanyi',
                'no_hp' => '08320',
                'no_rek' => '',
                'bank' => '',
                'atas_nama' => '',
                'peminatan' => 'Otomotif Service Sepeda Motor Ringan'
            ],
            [
                'id_user' => 4,
                'id_provinces' => 12,
                'id_cities' => 181,
                'id_districts' => 2558,
                'id_villages' => 31285,
                'nama' => 'nichol',
                'ttl' => 'Jakarta, 19 April 1999',
                'alamat' => 'Kampung Jeruk',
                'no_kk' => '',
                'no_ktp' => '',
                'jenis_kelamin' => 'Laki-laki',
                'pekerjaan' => 'Penyanyi',
                'no_hp' => '08322',
                'no_rek' => '',
                'bank' => '',
                'atas_nama' => '',
                'peminatan' => 'Otomotif Service Sepeda Motor Ringan'
            ],
            [
                'id_user' => 5,
                'id_provinces' => 12,
                'id_cities' => 185,
                'id_districts' => 2063,
                'id_villages' => 31053,
                'nama' => 'samsul',
                'ttl' => 'Jakarta, 19 April 1999',
                'alamat' => 'Kampung Jeruk',
                'no_kk' => '',
                'no_ktp' => '',
                'jenis_kelamin' => 'Laki-laki',
                'pekerjaan' => 'Penyanyi',
                'no_hp' => '08323',
                'no_rek' => '',
                'bank' => '',
                'atas_nama' => '',
                'peminatan' => 'Teknik Cukur Dasar'
            ],
            [
                'id_user' => 6,
                'id_provinces' => 12,
                'id_cities' => 181,
                'id_districts' => 2558,
                'id_villages' => 31285,
                'nama' => 'arief',
                'ttl' => 'Jakarta, 19 April 1999',
                'alamat' => 'Kampung Jeruk',
                'no_kk' => '',
                'no_ktp' => '',
                'jenis_kelamin' => 'Laki-laki',
                'pekerjaan' => 'Penyanyi',
                'no_hp' => '08324',
                'no_rek' => '',
                'bank' => '',
                'atas_nama' => '',
                'peminatan' => 'Teknik Cukur Dasar'
            ],
            [
                'id_user' => 7,
                'id_provinces' => 12,
                'id_cities' => 185,
                'id_districts' => 2063,
                'id_villages' => 31053,
                'nama' => 'sunandar',
                'ttl' => 'Jakarta, 19 April 1999',
                'alamat' => 'Kampung Jeruk',
                'no_kk' => '',
                'no_ktp' => '',
                'jenis_kelamin' => 'Laki-laki',
                'pekerjaan' => 'Penyanyi',
                'no_hp' => '08325',
                'no_rek' => '',
                'bank' => '',
                'atas_nama' => '',
                'peminatan' => 'Otomotif Service Sepeda Motor Ringan'
            ],
            [
                'id_user' => 2,
                'id_provinces' => 12,
                'id_cities' => 181,
                'id_districts' => 2558,
                'id_villages' => 31285,
                'nama' => 'asep',
                'ttl' => 'Jakarta, 19 April 1999',
                'alamat' => 'Kampung Jeruk',
                'no_kk' => '',
                'no_ktp' => '',
                'jenis_kelamin' => 'Laki-laki',
                'pekerjaan' => 'Penyanyi',
                'no_hp' => '08326',
                'no_rek' => '',
                'bank' => '',
                'atas_nama' => '',
                'peminatan' => 'Teknik Cukur Dasar'
            ]

        ]);
    }
}
