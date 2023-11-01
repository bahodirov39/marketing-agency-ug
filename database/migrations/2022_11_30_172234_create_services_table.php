<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable()->default(null);
            $table->string('main_photo')->nullable()->default(null);
            $table->string('slug_uz');
            $table->string('slug_ru');
            $table->string('slug_en')->nullable()->default(null);
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en')->nullable()->default(null);
            $table->text('body_uz');
            $table->text('body_ru');
            $table->text('body_en')->nullable()->default(null);
            $table->integer('order')->default(0);
            $table->integer('view')->default(0);
            $table->string('position')->nullable()->default(null);
            $table->string('feature_time')->nullable()->default(null);
            $table->string('feature_result')->nullable()->default(null);
            $table->string('feature_bonus')->nullable()->default(null);
            $table->string('feature_workers')->nullable()->default(null);
            $table->text('seo_title_uz')->nullable()->default(null);
            $table->text('seo_title_ru')->nullable()->default(null);
            $table->text('seo_title_en')->nullable()->default(null);
            $table->text('meta_description_uz')->nullable()->default(null);
            $table->text('meta_description_ru')->nullable()->default(null);
            $table->text('meta_description_en')->nullable()->default(null);
            $table->text('meta_keywords_uz')->nullable()->default(null);
            $table->text('meta_keywords_ru')->nullable()->default(null);
            $table->text('meta_keywords_en')->nullable()->default(null);
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
        Schema::dropIfExists('services');
    }
}
