<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('evaluators_id');
            $table->foreign('evaluators_id','fk_test_evaluators')->references('id')->on('evaluators')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('topics_id');
            $table->foreign('topics_id','fk_test_topics')->references('id')->on('topics')->onDelete('restrict')->onUpdate('restrict');       
            $table->string('name',150);
            $table->string('description',200);
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
        Schema::dropIfExists('tests');
    }
}
