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
            $table->integer('id')->primary();
            $table->integer('admins_id');
            $table->foreign('admins_id','fk_evaluators_admins')->references('id')->on('admins');;
            $table->string('username',40);
            $table->string('password',250);
            $table->string('email',150);
            $table->string('firstname',70);
            $table->string('lastname',70);
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
        Schema::dropIfExists('evaluators');
    }
}
