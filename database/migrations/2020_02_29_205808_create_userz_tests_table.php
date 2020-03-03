<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserzTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userz_tests', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('tests_id')->unsigned();
            $table->foreign('tests_id')->references('id')->on('tests');
            $table->integer('userzs_id')->unsigned();
            $table->foreign('userzs_id')->references('id')->on('userzs');
            $table->string('ipadress',40);
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
        Schema::dropIfExists('userz_tests');
    }
}
