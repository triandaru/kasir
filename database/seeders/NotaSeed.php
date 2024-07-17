<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            [
                'id_barang' => 'BRG001', // Assuming 'Chitato'
                'jumlah' => '10',
                'total' => '70000',
                'tgl_input' => now(),
                'periode' => '2024-07',
            ],
            [
                'id_barang' => 'BRG002', // Assuming 'Coca Cola'
                'jumlah' => '20',
                'total' => '160000',
                'tgl_input' => now(),
                'periode' => '2024-07',
            ],
        ]);
    }
}
