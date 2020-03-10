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

            $table->increments('id');
            $table->unsignedInteger('tests_id');
            $table->foreign('tests_id','fk_userz_tests_tests')->references('id')->on('tests');
            $table->unsignedInteger('userzs_id');
            $table->foreign('userzs_id','fk_userz_tests_userzs')->references('id')->on('userzs');
            $table->date('participationdate')->nullable();
            $table->string('ipadress',40)->nullable();
            $table->date('deadline');
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
