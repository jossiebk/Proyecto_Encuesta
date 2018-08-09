<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistantCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistant_course', function (Blueprint $table) {
            $table->increments('id');
            //Llave foranea a Assistant
            $table->unsignedInteger('id_assistant');
            $table->foreign('id_assistant')->references('id')->on('assistants');
            //Llave foranea a Courses
            $table->unsignedInteger('id_course');
            $table->foreign('id_course')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assistant_course');
    }
}
