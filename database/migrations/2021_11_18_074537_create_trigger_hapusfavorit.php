<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTriggerHapusfavorit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER hapusfavorit BEFORE DELETE ON favorit
        FOR EACH ROW
                    UPDATE `varianoleh` SET favorit_count=favorit_count-1
            WHERE idoleh=OLD.idoleh ;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger_hapusfavorit');
    }
}
