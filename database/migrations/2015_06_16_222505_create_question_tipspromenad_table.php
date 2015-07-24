<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTipspromenadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_tipspromenad', function (Blueprint $table) {
            $table->integer('question_id');
            $table->integer('tipspromenad_id');
            $table->primary(['question_id', 'tipspromenad_id']);
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
        Schema::drop('question_tipspromenad');
    }
}
