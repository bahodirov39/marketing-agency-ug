<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_uz');
            $table->string('category_ru');
            $table->string('category_en')->nullable()->default(null);
            $table->string('slug_uz');
            $table->string('slug_ru');
            $table->string('slug_en')->nullable()->default(null);
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
        Schema::dropIfExists('categories');
    }
}
