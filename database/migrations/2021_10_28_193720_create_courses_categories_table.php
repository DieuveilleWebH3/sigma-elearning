<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_categories', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->bigInteger('course')->index();
            $table->bigInteger('category')->index();

            $table->foreign('course')->references('id')->on('courses');
            $table->foreign('category')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_categories');
    }
}
