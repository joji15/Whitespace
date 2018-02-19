<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinishedTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('finished_tbl', function (Blueprint $table) {
          $table->increments('finished_id');
          $table->string('status', 50);
          $table->integer('student_id')->unsigned()->nullable();
          $table->integer('quiz_sched_id')->unsigned()->nullable();
      });

        Schema::table('finished_tbl', function($table) {
          $table->foreign('student_id')->references('student_id')->on('student')->onDelete('RESTRICT')->onUpdate('RESTRICT');
          $table->foreign('quiz_sched_id')->references('quiz_sched_id')->on('quiz_sched_tbl')->onDelete('RESTRICT')->onUpdate('RESTRICT');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finished_tbl');
    }
}
