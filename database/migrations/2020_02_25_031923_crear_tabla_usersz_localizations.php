<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUserszLocalizations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersz_localizations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('usersz_id');
            $table->foreign('usersz_id','fk_usersz_localizations_usersz')->references('id')->on('usersz');
            $table->integer('localizations_id');
            $table->foreign('localizations_id','fk_usersz_localizations_localizations')->references('id')->on('localizations');
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
        Schema::dropIfExists('usersz_localizations');
    }
}
