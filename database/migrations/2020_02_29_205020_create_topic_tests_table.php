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

            $table->increments('id');
            $table->unsignedInteger('tests_id')->nullable();
            $table->foreign('tests_id','fk_topic__tests_tests')->references('id')->on('tests');
            $table->unsignedInteger('topics_id')->nullable();
            $table->foreign('topics_id','fk_topic__testss_topics')->references('id')->on('topics');
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
