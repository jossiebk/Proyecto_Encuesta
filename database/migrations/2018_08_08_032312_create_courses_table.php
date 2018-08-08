<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('code');
            $table->text('description');
            //Llave foranea a facultad
            $table->unsignedInteger('id_faculty');
            $table->foreign('id_faculty')->references('id')->on('faculties');
            //Llave foranea a escuela
            $table->unsignedInteger('id_school');
            $table->foreign('id_school')->references('id')->on('schools');
            //Llave foranea a unidad academica
            $table->unsignedInteger('id_academic_unit');
            $table->foreign('id_academic_unit')->references('id')->on('academic_units');
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
