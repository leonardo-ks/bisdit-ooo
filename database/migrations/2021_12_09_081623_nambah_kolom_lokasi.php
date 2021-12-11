<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NambahKolomLokasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->string('pernah_wisata')->nullable();
        });
        Schema::table('mitra', function (Blueprint $table) {
            $table->dropColumn('best_seller');
        });
        Schema::table('produk_mitra', function (Blueprint $table) {
            $table->string('best_seller')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
