<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempatbeli', function (Blueprint $table) {
            $table->id('idtempatbeli');
            $table->string('merk',25);
            $table->string('varianjual',25);
            $table->foreign('idoleh')->references('idoleh')->on('varianoleh');
            $table->foreign('idlokasi')->references('idlokasi')->on('lokasi');
            $table->foreign('idmitra')->references('idmitra')->on('mitra');
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
        Schema::dropIfExists('tempatbeli');
    }
}
