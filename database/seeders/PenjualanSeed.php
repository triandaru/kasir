<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penjualans')->insert([
            [
                'id_barang' => 'BRG001', // Assuming 'Chitato'
                'jumlah' => '5',
                'total' => '35000',
                'tgl_input' => now(),
            ],
            [
                'id_barang' => 'BRG002', // Assuming 'Coca Cola'
                'jumlah' => '10',
                'total' => '80000',
                'tgl_input' => now(),
            ],
        ]);
    }
}
