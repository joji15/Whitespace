<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('quiz', function (Blueprint $table) {
             $table->string('quiz_code', 10)->primary();
             $table->string('title', 25);
             $table->date('sched_date');
             $table->time('sched_time', 6);
             $table->integer('class_id')->unsigned()->foreign('class_id')->references('class_id')->on('class_tbl');
             $table->integer('prof_id')->unsigned()->foreign('prof_id')->references('prof_id')->on('professor');

         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('quiz');
     }
}
