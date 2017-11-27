<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::enableForeignKeyConstraints();
       Schema::create('question_tbl', function (Blueprint $table) {
         $table->increments('question_id');
         $table->string('question', 100);
         $table->string('choice_A', 100);
         $table->string('choice_B', 100);
         $table->string('choice_C', 100);
         $table->string('choice_D', 100);
         $table->string('correct_ans', 50);
         $table->integer('quiz_id')->unsigned()->nullable();
       });

       Schema::table('question_tbl', function($table) {
         $table->foreign('quiz_id')->references('quiz_id')->on('quiz_tbl')->onDelete('cascade');
       });
     }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('question_tbl');
     }
}
