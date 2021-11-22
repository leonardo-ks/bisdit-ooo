<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NambahColumnTempatbeli extends Migration
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
            $table->text('alamat')->nullable();
            $table->text('link')->nullable();
            $table->mediumText('google_map')->nullable();
            $table->string('jambuka')->nullable();
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
