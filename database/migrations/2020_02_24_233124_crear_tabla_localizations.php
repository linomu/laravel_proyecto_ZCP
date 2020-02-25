<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaLocalizations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localizations', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('country',100);
            $table->string('city',100);
            $table->string('region',100);
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
        Schema::dropIfExists('localizations');
    }
}
