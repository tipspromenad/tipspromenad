<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipspromenadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipspromenads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idCode');
            $table->integer('user_id')->nullable();
            $table->string('unique_hash_id', 60)->nullable();
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->boolean('mobile');
            $table->boolean('mobile_question');
            $table->boolean('showHelp');
            $table->text('order_of_questions')->nullable();
            $table->date('stop_date');
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
        Schema::drop('tipspromenads');
    }
}
