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
            $table->string('id',20)->primary();
            $table->string('admins_id')->unique()->nullable();
            $table->foreign('admins_id')->references('id')->on('admins');
            $table->string('firstname',70);
            $table->string('lastname',70);
            $table->enum('gender', ['f', 'm']);
            $table->string('phonenumber',20);
            $table->date('birth_date');
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
