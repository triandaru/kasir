<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $fillable = [
        'id_barang', 'id_kategori', 'nama_barang', 'merk', 'harga_beli', 'harga_jual', 'satuan_barang', 'stok', 'tgl_input', 'tgl_update'
    ];
}
