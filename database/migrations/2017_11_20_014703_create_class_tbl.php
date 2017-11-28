<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::enableForeignKeyConstraints();
       Schema::create('class_tbl', function (Blueprint $table) {
         $table->increments('class_id');
         $table->string('course', 10);
         $table->string('section', 5);
         $table->string('school_year', 10);
         $table->integer('prof_id')->unsigned()->nullable();
       });

       Schema::table('class_tbl', function($table) {
         $table->foreign('prof_id')->references('prof_id')->on('professor')->onDelete('cascade');
       });
     }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('class_tbl');
     }
}
