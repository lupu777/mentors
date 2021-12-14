<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("title", 80);
            $table->string("subtitle", 160);
            $table->longText("description");
            $table->foreignId("language_id")->constrained();
            $table->foreignId("currency_id")->constrained();
            $table->foreignId("course_category_id")->constrained();
            $table->integer("price")->default(0);
            $table->string("cover_image")->nullable();
            $table->string("promo_video")->nullable();
            $table->json("captions")->nullable();
            $table->integer("status")->default(0);
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
        Schema::dropIfExists('courses');
    }
}
