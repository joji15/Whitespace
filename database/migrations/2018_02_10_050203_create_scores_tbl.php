<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('scores_tbl', function (Blueprint $table) {
            $table->increments('scores_id');
            $table->integer('score');
            $table->integer('student_id')->unsigned()->nullable();
            $table->integer('quiz_sched_id')->unsigned()->nullable();
       });

        Schema::table('scores_tbl', function($table) {
           
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores_tbl');
    }
}
