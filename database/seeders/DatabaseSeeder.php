<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\UserFormulirSeeder;
use Database\Seeders\SurveySeeder;
use Laravolt\Indonesia\Seeds\CitiesSeeder;
use Laravolt\Indonesia\Seeds\VillagesSeeder;
use Laravolt\Indonesia\Seeds\DistrictsSeeder;
use Laravolt\Indonesia\Seeds\ProvincesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
               'name' => 'Reza',
               'phone' => '08123',
               'role' => 1,
               'password' => Hash::make('123456'),
               'status' => ""
            ],
            [
               'name' => 'Pamungkas',
               'phone' => '08321',
               'role' => 2,
               'password' => Hash::make('123456'),
               'status' => "Calon Peserta"
            ],
            [
               'name' => 'Jefrey',
               'phone' => '08320',
               'role' => 2,
               'password' => Hash::make('123456'),
               'status' => "Calon Peserta"
            ],
            [
               'name' => 'nichol',
               'phone' => '08322',
               'role' => 2,
               'password' => Hash::make('123456'),
               'status' => "Calon Peserta"
            ],
            [
               'name' => 'samsul',
               'phone' => '08323',
               'role' => 2,
               'password' => Hash::make('123456'),
               'status' => "Calon Peserta"
            ],
            [
               'name' => 'arief',
               'phone' => '08324',
               'role' => 2,
               'password' => Hash::make('123456'),
               'status' => "Calon Peserta"
            ],
            [
               'name' => 'munif',
               'phone' => '08325',
               'role' => 2,
               'password' => Hash::make('123456'),
               'status' => "Calon Peserta"
            ],
            [
               'name' => 'sunandar',
               'phone' => '08326',
               'role' => 2,
               'password' => Hash::make('123456'),
               'status' => "Calon Peserta"
            ],
            [
               'name' => 'asep',
               'phone' => '08327',
               'role' => 2,
               'password' => Hash::make('123456'),
               'status' => "Calon Peserta"
            ],
            [
               'name' => 'hidayat',
               'phone' => '08328',
               'role' => 2,
               'password' => Hash::make('123456'),
               'status' => "Calon Peserta"
            ],
     ]);
        $this->call([
            ProvincesSeeder::class,
            CitiesSeeder::class,
            DistrictsSeeder::class,
            VillagesSeeder::class,
            UserFormulirSeeder::class,
            SurveySeeder::class
        ]);
    }
}
