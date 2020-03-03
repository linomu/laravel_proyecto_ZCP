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
