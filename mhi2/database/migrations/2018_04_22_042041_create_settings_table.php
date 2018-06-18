<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('volunteer_text');
            $table->string('fundraise_text');
            $table->string('donate_text');
            $table->text('what_we_do1');
            $table->text('what_we_do2');
            $table->text('who_we_are');
            $table->string('picture_whoweare');
            $table->string('tweetno');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('footernote');
            $table->text('corporate_profile');
            $table->text('vision');
            $table->text('stafftext');
            $table->text('boardtext');
            $table->text('clinicvision');
            $table->text('contactwriteup');
            $table->string('address');
            $table->string('generalemail')->nullable();
            $table->string('contact_email1')->nullable();
            $table->string('contact_email12')->nullable();
            $table->string('phone')->nullable();
            $table->string('contactboxtext');
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
        Schema::dropIfExists('settings');
    }
}
