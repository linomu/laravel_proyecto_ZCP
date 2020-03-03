<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_tests', function (Blueprint $table) {
<<<<<<< HEAD
            $table->integerIncrements('id');
            $table->integer('tests_id')->unsigned();
            $table->foreign('tests_id')->references('id')->on('tests');
            $table->integer('topics_id')->unsigned();
            $table->foreign('topics_id')->references('id')->on('topics');
=======
            $table->increments('id');
            $table->unsignedInteger('tests_id')->unique()->nullable();
            $table->foreign('tests_id','fk_topic__tests_tests')->references('id')->on('tests');
            $table->unsignedInteger('topics_id')->unique()->nullable();
            $table->foreign('topics_id','fk_topic__testss_topics')->references('id')->on('topics');
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
        Schema::dropIfExists('topic_tests');
    }
}
