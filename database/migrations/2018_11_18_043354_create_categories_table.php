<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->string('slug')->unique();
            $table->string('title');
            $table->string('image');
            $table->date('opendate');
            $table->date('expiredate');
            $table->string('location');
            $table->longText('description');
            $table->longText('ability');
            $table->string('job_viewed')->nullable();
            $table->string('job_vacancy');
            $table->string('job_opening');
            $table->string('salary');
            $table->string('gender');
            $table->string('career_level');
            $table->string('industry');
            $table->string('experience');
            $table->string('qualification');
            $table->string('age_range');
            $table->string('title_abbreviation');
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
