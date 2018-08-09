<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('puntuality');
            $table->integer('knowledge');
            $table->integer('presentation');
            $table->integer('notes');
            $table->integer('assistance');
            $table->string('comment');
            //Referencia a quien evalua
            $table->unsignedInteger('id_user_evaluator');
            $table->foreign('id_user_evaluator')->references('id')->on('users');
            //Referencia a quien esta siendo evaluado
            $table->unsignedInteger('id_user_evaluated');
            $table->foreign('id_user_evaluated')->references('id')->on('users');
            //Referencia a curso que esta siendo evaluado
            $table->unsignedInteger('id_course');
            $table->foreign('id_course')->references('id')->on('courses');
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
        Schema::dropIfExists('reviews');
    }
}
