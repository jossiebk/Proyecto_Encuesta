<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment');
            $table->text('commentN');
            $table->text('score');
            $table->unsignedInteger('id_teacher');
            $table->foreign('id_teacher')->references('id')->on('teachers');
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
        Schema::dropIfExists('teacher_comments');
    }
}
