<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluators', function (Blueprint $table) {
<<<<<<< HEAD
            $table->integerIncrements('id')->primary();
            $table->integer('admins_id');
=======
            $table->integer('id');
            $table->primary('id');
            $table->integer('admins_id')->unique()->nullable();
>>>>>>> ede5f389bfb28ef5fd5f6a417a2041c2f0c2c993
            $table->foreign('admins_id')->references('id')->on('admins');;
            $table->string('username',40);
            $table->string('password',250);
            $table->string('email',150);
            $table->string('firstname',70);
            $table->string('lastname',70);
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
        Schema::dropIfExists('evaluators');
    }
}
