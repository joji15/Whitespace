<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizTbl extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::enableForeignKeyConstraints();
    Schema::create('quiz_tbl', function (Blueprint $table) {
      $table->increments('quiz_id');
      $table->string('quiz_title', 50);
      $table->string('quiz_desc', 150);
      $table->timestamps();
      $table->integer('prof_id')->unsigned()->nullable();
    });

    Schema::table('quiz_tbl', function($table) {
      $table->foreign('prof_id')->references('prof_id')->on('professor')->onDelete('RESTRICT')->onUpdate('RESTRICT');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('quiz_tbl');
  }
}
