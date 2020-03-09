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
            $table->increments('id');
            $table->integer('evaluators_id')->unique()->nullable();
            $table->foreign('evaluators_id','fk_test_evaluators')->references('id')->on('evaluators')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name',150);
            $table->string('description',200);
            $table->enum('kindSurvey', ['SUS']);
            $table->date('deadline',150);
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
