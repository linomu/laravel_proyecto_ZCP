<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localizations', function (Blueprint $table) {
<<<<<<< HEAD
            $table->integerIncrements('id');
=======
            $table->increments('id');
>>>>>>> ede5f389bfb28ef5fd5f6a417a2041c2f0c2c993
            $table->string('country',100);
            $table->string('city',100);
            $table->string('region',100);
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
        Schema::dropIfExists('localizations');
    }
}
