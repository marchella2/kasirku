<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Admin Kasir',
            'username' => 'admin1',
            'email' => 'adminkasir@gmail.com',
            'level' => 'admin-kasir',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'name' => 'Kasir',
            'username' => 'kasir1',
            'email' => 'kasir@gmail.com',
            'level' => 'kasir',
            'password' => Hash::make('12345678'),
        ]);
    }
}
