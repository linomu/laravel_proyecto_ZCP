<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUserszTests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersz_tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tests_id');
            $table->foreign('tests_id','fk_users_tests_tests')->references('id')->on('tests');
            $table->integer('usersz_id');
            $table->foreign('usersz_id','fk_usersz_tests_usersz')->references('id')->on('usersz');
            $table->date('modified');
            $table->date('created');
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
        Schema::dropIfExists('usersz_tests');
    }
}
