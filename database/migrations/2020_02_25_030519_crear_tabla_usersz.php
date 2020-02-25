<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsersz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersz', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('email',100);
            $table->string('ipadress',40);
            $table->date('participationdate');
            $table->date('participationhour');
            $table->string('accessdevice',100);
            $table->date('modified');
            $table->date('created');
            $table->integer('age');
            $table->char('gender');
            $table->string('firstname',100);
            $table->string('lastname',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersz');
    }
}
