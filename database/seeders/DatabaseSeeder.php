<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            ],
            [
               'name' => 'Pamungkas',
               'phone' => '08321',
               'role' => 2,
               'password' => Hash::make('123456'),
            ]
     ]);
    }
}
