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
            $table->increments('id');
            $table->unsignedInteger('localizations_id')->nullable();
            $table->foreign('localizations_id','fk_userzs__localizations')->references('id')->on('localizations');
            $table->string('email',100);
            $table->enum('gender', ['f', 'm']);
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
        Schema::dropIfExists('userzs');
    }
}
