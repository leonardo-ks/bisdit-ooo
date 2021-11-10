<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PerubahanPadaTipeoleh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //ngubah nama tipe oleh
        // Schema::rename('tipeoleh', 'jenisoleh');
        // Schema::table('varianoleh', function (Blueprint $table) {
        //     $table->dropForeign(['idtipe']);
        // });

        // Schema::table('jenisoleh', function (Blueprint $table) {
        //     $table->renameColumn('idtipe', 'idjenis');
        //     $table->renameColumn('namatipe', 'namajenis');
        //     $table->renameColumn('deskripsitipe', 'deskripsijenis');
        //     $table->renameColumn('gambartipe', 'gambarjenis');
        // });

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
