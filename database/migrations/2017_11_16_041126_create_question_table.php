<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('question', function (Blueprint $table) {
      $table->integer('question_no')->unsigned()->primary();
      $table->string('question', 100);
      $table->string('choice_A', 100);
      $table->string('choice_B', 100);
      $table->string('choice_C', 100);
      $table->string('choice_D', 100);
      $table->string('correct_ans', 50);
      $table->string('quiz_code', 10)->foreign('quiz_code')->references('quiz_code')->on('quiz');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('question');
  }
}
