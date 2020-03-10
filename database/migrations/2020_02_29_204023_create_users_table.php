<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('actors_id')->unique()->nullable();
            $table->foreign('actors_id','fk_users_actors')->references('id')->on('actors')->onDelete('cascade')->onUpdate('cascade');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('rol', ['admin', 'evaluator'])->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
