<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
   {
       Schema::enableForeignKeyConstraints();
       Schema::create('student', function (Blueprint $table) {
           $table->increments('student_id');
           $table->string('student_name', 200);
           $table->string('student_email', 50)->nullable();
           $table->integer('class_id')->unsigned()->nullable();
           $table->string('password', 100)->nullable();
           $table->rememberToken();
           $table->timestamps();
       });

       Schema::table('student', function($table) {
          $table->foreign('class_id')->references('class_id')->on('class_tbl')->onDelete('cascade');
       });
   }
}
