<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NambahKolom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('varianoleh', function (Blueprint $table) {
            $table->bigInteger('idjenis')->unsigned()->nullable();
            $table->foreign('idjenis')->references('idjenis')->on('jenisoleh');

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
