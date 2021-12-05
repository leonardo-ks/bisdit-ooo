<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UbahKolomKolom extends Migration
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
            $table->integer('hargamin')->nullable();
            $table->integer('hargamax')->nullable();
        });

        Schema::table('tempatbeli', function (Blueprint $table) {
            $table->text('best_seller')->nullable();
            $table->string('satuan')->nullable();
        });

        Schema::table('mitra', function (Blueprint $table) {
            $table->text('link')->nullable();
            $table->text('best_seller')->nullable();
        });

        Schema::table('bahandasar', function (Blueprint $table) {
            $table->text('manfaat')->nullable();
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
