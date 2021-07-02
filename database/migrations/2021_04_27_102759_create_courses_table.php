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
            $table->string('name')->unique();
            $table->integer('course_degree')->nullable();
            $table->dateTime('date_of_exam')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('teacher_id')->nullable();
            $table->boolean('one_page')->default(TRUE);
            $table->boolean('previous')->default(TRUE);
            $table->integer('no_of_submit')->default(1);
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
