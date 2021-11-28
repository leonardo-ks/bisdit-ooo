<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukMitraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_mitra', function (Blueprint $table) {
            $table->id('id_produk_mitra');
            $table->string('nama_produk_mitra');
            $table->text('gambar_produk_mitra');
            $table->string('harga_produk_mitra');
            $table->bigInteger('status_produkmitra');
            $table->bigInteger('idoleh')->unsigned();
            $table->foreign('idoleh')->references('idoleh')->on('varianoleh');
            $table->bigInteger('idmitra')->unsigned();
            $table->foreign('idmitra')->references('idmitra')->on('mitra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk_mitra');
    }
}
