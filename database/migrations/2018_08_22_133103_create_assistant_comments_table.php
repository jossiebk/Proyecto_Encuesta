<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistantCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistant_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment');
            $table->text('commentN');
            $table->text('score');
            $table->unsignedInteger('id_assistant');
            $table->foreign('id_assistant')->references('id')->on('assistants');
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
        Schema::dropIfExists('assistant_comments');
    }
}
