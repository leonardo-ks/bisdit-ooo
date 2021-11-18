<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTriggerTambahFavoritCount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER tambahfavorit BEFORE INSERT ON favorit
        FOR EACH ROW
                    UPDATE `varianoleh` SET favorit_count=favorit_count+1
            WHERE idoleh=NEW.idoleh ;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_tambah_favorit_count');
    }
}
