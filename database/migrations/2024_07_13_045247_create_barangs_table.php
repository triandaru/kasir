<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_barang', 255);
            $table->integer('id_kategori')->unsigned();
            $table->text('nama_barang');
            $table->string('merk', 255);
            $table->string('harga_beli', 255);
            $table->string('harga_jual', 255);
            $table->string('satuan_barang', 255);
            $table->integer('stok')->unsigned();
            $table->string('tgl_input', 255);
            $table->string('tgl_update', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
