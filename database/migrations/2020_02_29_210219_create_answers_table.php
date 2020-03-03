<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
<<<<<<< HEAD
            $table->integerIncrements('id');
            $table->integer('questions_id')->unsigned();
            $table->foreign('questions_id')->references('id')->on('questions');
=======
            $table->increments('id');
            $table->unsignedInteger('questions_id')->unique()->nullable();
            $table->foreign('questions_id','fk_answers_questions')->references('id')->on('questions');
>>>>>>> ede5f389bfb28ef5fd5f6a417a2041c2f0c2c993
            $table->string('description',100);
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
        Schema::dropIfExists('answers');
    }
}
