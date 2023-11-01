<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en')->nullable()->default(null);
            $table->string('position_uz');
            $table->string('position_ru');
            $table->string('position_en')->nullable()->default(null);
            $table->text('body_uz');
            $table->text('body_ru');
            $table->text('body_en')->nullable()->default(null);
            $table->string('image');
            $table->string('view')->nullable()->default(0);
            $table->integer('order')->nullable()->default(0);
            $table->string('telegram_link')->nullable()->default(null);
            $table->string('instagram_link')->nullable()->default(null);
            $table->string('facebook_link')->nullable()->default(null);
            $table->string('twitter_link')->nullable()->default(null);
            $table->string('linkedin_link')->nullable()->default(null);
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
        Schema::dropIfExists('teams');
    }
}
