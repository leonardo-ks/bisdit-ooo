<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NambahKolomz extends Migration
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
            $table->boolean('vegan')->nullable();
            $table->boolean('vegatarian')->nullable();
            $table->boolean('gluten_free')->nullable();
        });
        Schema::table('tempatbeli', function (Blueprint $table) {
            $table->boolean('bpom')->nullable();
            $table->string('cara_bayar')->nullable();
            $table->string('sosmed')->nullable();
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
