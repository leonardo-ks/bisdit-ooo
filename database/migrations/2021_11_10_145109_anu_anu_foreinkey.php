<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnuAnuForeinkey extends Migration
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
            $table->dropColumn('idvarian');
            $table->bigInteger('id_varian')->unsigned()->nullable();
            $table->foreign('id_varian')->references('id_varian')->on('varianjenis');
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
