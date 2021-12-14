<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToLivestream extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('livestreams', function (Blueprint $table) {
            //
            $table->foreignId("language_id")->constrained();
            $table->text("options")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('livestrams', function (Blueprint $table) {
            //
            $table->dropColumn("language_id");
        });
    }
}
