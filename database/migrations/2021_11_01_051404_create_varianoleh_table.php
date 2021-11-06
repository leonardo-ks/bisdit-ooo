<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVarianolehTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('varianoleh', function (Blueprint $table) {
            $table->id('idoleh');
            $table->string('namaoleh',25);
            $table->string('namalain',255)->nullable();
            $table->text('gambarutama');
            $table->mediumText('gambaroleh');
            $table->text('deskripsioleh');
            $table->bigInteger('idtipe')->unsigned();
            $table->foreign('idtipe')->references('idtipe')->on('tipeoleh');
            $table->bigInteger('idrasa')->unsigned();
            $table->foreign('idrasa')->references('idrasa')->on('rasa');
            $table->bigInteger('idtekstur')->unsigned();
            $table->foreign('idtekstur')->references('idtekstur')->on('tekstur');
            $table->bigInteger('idbahan')->unsigned();
            $table->foreign('idbahan')->references('idbahan')->on('bahandasar');
            $table->string('komposisi',255);
            $table->bigInteger('idmasak')->unsigned();
            $table->foreign('idmasak')->references('idmasak')->on('masak');
            $table->bigInteger('idlokasi')->unsigned();
            $table->foreign('idlokasi')->references('idlokasi')->on('lokasi');
            $table->string('harga',25);
            $table->boolean('statushalal');
            $table->string('kadarluarsa');
            $table->string('carapenyimpanan',255);
            $table->string('carapenyajian',255);
            $table->text('trivia')->nullable();
            $table->string('namacocok',25);
            $table->bigInteger('idmitra')->nullable()->unsigned();
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
        Schema::dropIfExists('varianoleh');
    }
}
