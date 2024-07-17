<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\barang;
use App\Models\kategori;

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
        $this->call([
            KategoriSeed::class,
            BarangSeed::class,
            NotaSeed::class,
            PenjualanSeed::class,
        ]);
    }
}
