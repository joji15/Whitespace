<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('answers_tbl', function (Blueprint $table) {
           $table->increments('answer_id');
           $table->string('student_ans', 50);
           $table->integer('student_id')->unsigned()->nullable();
           $table->integer('question_id')->unsigned()->nullable();
       });

        Schema::table('answers_tbl', function($table) {
           $table->foreign('student_id')->references('student_id')->on('student')->onDelete('restrict')->onUpdate('restrict');
           $table->foreign('question_id')->references('question_id')->on('question_tbl')->onDelete('restrict')->onUpdate('restrict');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers_tbl');
    }
}
