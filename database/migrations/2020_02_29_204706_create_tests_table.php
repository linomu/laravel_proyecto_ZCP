<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {

            $table->integerIncrements('id');
            $table->integer('surveys_id')->unsigned();
            $table->foreign('surveys_id')->references('id')->on('surveys')->onDelete('restrict')->onUpdate('restrict');
            //$table->integer('evaluators_id');
            //$table->foreign('evaluators_id')->references('id')->on('evaluators')->onDelete('restrict')->onUpdate('restrict');


            $table->increments('id');
            $table->integer('evaluators_id')->unique()->nullable();
            $table->unsignedInteger('surveys_id')->unique()->nullable();
            $table->foreign('evaluators_id','fk_test_evaluators')->references('id')->on('evaluators')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('surveys_id','fk_test_surveys')->references('id')->on('surveys')->onDelete('cascade')->onUpdate('cascade');

            $table->string('name',150);
            $table->string('description',200);
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
        Schema::dropIfExists('tests');
    }
}
