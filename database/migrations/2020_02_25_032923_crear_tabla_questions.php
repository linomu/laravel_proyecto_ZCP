<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('tests_id');
            $table->foreign('tests_id','fk_questions_tests')->references('id')->on('tests');
            $table->integer('questions_types_id');
            $table->foreign('questions_types_id','fk_questions_questions_types')->references('id')->on('questions_types');
            $table->string('description',100);
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
        Schema::dropIfExists('questions');
    }
}
