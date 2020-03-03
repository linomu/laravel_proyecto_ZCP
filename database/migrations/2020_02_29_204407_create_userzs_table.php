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
<<<<<<< HEAD
            $table->integerIncrements('id');
            $table->string('email',100);
            $table->integer('localizations_id')->unsigned();
            $table->foreign('localizations_id')->references('id')->on('localizations');
=======
            $table->increments('id');
            $table->string('email',100);
            $table->unsignedInteger('localizations_id')->unique()->nullable();
            $table->foreign('localizations_id','fk_userzs__localizations')->references('id')->on('localizations');
>>>>>>> ede5f389bfb28ef5fd5f6a417a2041c2f0c2c993
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
