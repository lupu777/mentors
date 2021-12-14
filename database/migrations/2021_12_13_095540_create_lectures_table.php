<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->id();
            $table->foreignId("course_content_id")->constrained();
            $table->string("title");
            $table->string("file");
            $table->string("file_type");
            $table->integer("sort")->default(1);
            $table->longText("description")->nullable();
            $table->integer("volume")->nullable();
            $table->integer("duration")->nullable();
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
        Schema::dropIfExists('lectures');
    }
}
