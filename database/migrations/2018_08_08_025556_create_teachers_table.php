<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->date('birthdate');
            $table->string('image');
            $table->text('personal_description');
            $table->string('academic_title_1');
            $table->string('academic_title_2')->nullable();
            $table->string('academic_title_3')->nullable();
            $table->string('work_experience_1');
            $table->string('work_experience_2')->nullable();
            $table->string('work_experience_3')->nullable();
            $table->text('references')->nullable();
            //Llave foranea
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('teachers');
    }
}
