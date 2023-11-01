<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('slug_uz');
            $table->string('slug_ru');
            $table->string('slug_en')->nullable()->default(null);
            $table->string('thumbnail_photo');
            $table->string('main_photo')->nullable()->default(null);
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en')->nullable()->default(null);
            $table->text('body_uz');
            $table->text('body_ru');
            $table->text('body_en')->nullable()->default(null);
            $table->integer('view')->nullable()->default(0);
            $table->integer('order')->nullable()->default(0);
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
        Schema::dropIfExists('blogs');
    }
}
