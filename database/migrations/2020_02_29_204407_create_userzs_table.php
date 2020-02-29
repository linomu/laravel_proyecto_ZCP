<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userzs', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('email',100);
            $table->integer('localizations_id');
            $table->foreign('localizations_id','fk_userzs__localizations')->references('id')->on('localizations');
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
        Schema::dropIfExists('userzs');
    }
}
