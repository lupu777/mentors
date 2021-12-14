<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->text('professional_headline')->nullable();
            $table->longText('description')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('tiktok_link')->nullable();
            $table->boolean('subscribed')->default(0);
            $table->boolean('subscribed_for_course_recommendation')->default(0);
            $table->boolean('email_general_notifications')->default(0);
            $table->boolean('email_promotions_notifications')->default(0);
            $table->boolean('email_instructor_notifications')->default(0);
            $table->boolean('privacy_profile_in_searchengine')->default(0);
            $table->boolean('privacy_show_courses')->default(0);
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
        Schema::dropIfExists('user_infos');
    }
}
