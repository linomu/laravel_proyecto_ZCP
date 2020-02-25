<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaQuestionsAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('questions_id');
            $table->foreign('questions_id','fk_questions_answers_questions')->references('id')->on('questions');
            $table->integer('answers_id');
            $table->foreign('answers_id','fk_questions_answers_answers')->references('id')->on('answers');
            $table->date('modified');
            $table->date('created');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions_answers');
    }
}
