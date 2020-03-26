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

            $table->increments('id');
            $table->unsignedInteger('userz_tests_id')->nullable();
            $table->foreign('userz_tests_id','fk_answers_userz_tests')->references('id')->on('userz_tests');
            $table->unsignedInteger('questions_id')->nullable();
            $table->foreign('questions_id','fk_answers_questions')->references('id')->on('questions')->onDelete('cascade')->onUpdate('cascade');;
            $table->integer('description');
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
