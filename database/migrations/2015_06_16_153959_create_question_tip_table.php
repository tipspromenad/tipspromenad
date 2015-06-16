<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_tip', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('question_id');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');

            $table->integer('tip_id');
            $table->foreign('tip_id')->references('id')->on('tips')->onDelete('cascade');

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
        Schema::drop('question_tip');
    }
}
