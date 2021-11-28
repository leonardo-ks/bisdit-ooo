<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NambahKolomOlehTmpatbli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('tempatbeli', function (Blueprint $table) {
            $table->string('rentang_harga')->nullable();
        });
        Schema::table('varianoleh', function (Blueprint $table) {
            $table->string('satuan')->nullable();
        });
        Schema::table('mitra', function (Blueprint $table) {
            $table->renameColumn('logo', 'foto_mitra');
            $table->string('cicip')->nullable();
            $table->mediumText('gmap_mitra')->nullable();
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
