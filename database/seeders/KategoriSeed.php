<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            ['nama_kategori' => 'Snack', 'tgl_input' => now()],
            ['nama_kategori' => 'Minuman', 'tgl_input' => now()],
            ['nama_kategori' => 'ATK', 'tgl_input' => now()],
        ]);
    }
}
