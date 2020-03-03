<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
<<<<<<< HEAD
            $table->integerIncrements('id');
            $table->integer('tests_id')->unsigned();
            $table->foreign('tests_id')->references('id')->on('tests');
=======
            $table->increments('id');
            $table->unsignedInteger('tests_id')->unique()->nullable();
            $table->foreign('tests_id','fk_questions_tests')->references('id')->on('tests');
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
        Schema::dropIfExists('questions');
    }
}
