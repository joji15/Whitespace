<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizSchedTbl extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::enableForeignKeyConstraints();
    Schema::create('quiz_sched_tbl', function (Blueprint $table) {
      $table->increments('quiz_sched_id');
      $table->date('quiz_date', 50);
      $table->string('time_start', 10);
      $table->string('time_end', 10);
      $table->integer('quiz_id')->unsigned()->nullable();
    });

    Schema::table('quiz_sched_tbl', function($table) {
      $table->foreign('quiz_id')->references('quiz_id')->on('quiz_tbl')->onDelete('RESTRICT')->onUpdate('RESTRICT');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('quiz_sched_tbl');
  }
}
