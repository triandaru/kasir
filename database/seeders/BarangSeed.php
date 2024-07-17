<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            [
                'id_barang' => 'BRG001',
                'id_kategori' => 1, // Assuming 'snack' has ID 1
                'nama_barang' => 'Chitato',
                'merk' => 'Chitato',
                'harga_beli' => '5000',
                'harga_jual' => '7000',
                'satuan_barang' => 'pcs',
                'stok' => 100,
                'tgl_input' => now(),
                'tgl_update' => now(),
            ],
            [
                'id_barang' => 'BRG002',
                'id_kategori' => 2, // Assuming 'minuman' has ID 2
                'nama_barang' => 'Coca Cola',
                'merk' => 'Coca Cola',
                'harga_beli' => '6000',
                'harga_jual' => '8000',
                'satuan_barang' => 'bottle',
                'stok' => 200,
                'tgl_input' => now(),
                'tgl_update' => now(),
            ],
            [
                'id_barang' => 'BRG003',
                'id_kategori' => 3, // Assuming 'ATK' has ID 3
                'nama_barang' => 'Pensil',
                'merk' => 'Faber Castell',
                'harga_beli' => '2000',
                'harga_jual' => '3000',
                'satuan_barang' => 'pcs',
                'stok' => 300,
                'tgl_input' => now(),
                'tgl_update' => now(),
            ],
        ]);
    }
}
