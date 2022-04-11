<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_barang')->insert([
            'id' => '1',
            'nama_barang' => 'Sabun Batang',
            'harga_satuan' => '3000',
        ]);

        DB::table('master_barang')->insert([
            'id' => '2',
            'nama_barang' => 'Mi Instan',
            'harga_satuan' => '2000',
        ]);

        DB::table('master_barang')->insert([
            'id' => '3',
            'nama_barang' => 'Pensil',
            'harga_satuan' => '1000'
        ]);

        DB::table('master_barang')->insert([
            'id' => '4',
            'nama_barang' => 'Kopi Sachet',
            'harga_satuan' => '1500',
        ]);

        DB::table('master_barang')->insert([
            'id' => '5',
            'nama_barang' => 'Air minum galon',
            'harga_satuan' => '20000',
        ]);
    }
}
