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
            $table->timestamps();

            $table->string('title', 250)->unique();
            $table->string('slug', 300);
            $table->text('description');
            $table->string('picture')->nullable();
            $table->integer('duration');

            $table->unsignedBigInteger('level')->index()->default(1);
            $table->foreign('level')->references('id')->on('levels');

            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('SET NULL');
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
