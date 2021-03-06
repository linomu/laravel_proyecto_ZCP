<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('admin_id');
            $table->string('firstname',70);
            $table->string('lastname',70);
            $table->enum('gender', ['f', 'm']);
            $table->string('phonenumber',20)->nullable();
            $table->date('birth_date');
            $table->string('ulrphoto',100);
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
        Schema::dropIfExists('actors');
    }
}
