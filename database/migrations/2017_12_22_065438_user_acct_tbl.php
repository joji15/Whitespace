<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserAcctTbl extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::enableForeignKeyConstraints();
    Schema::create('user_acct_tbl', function (Blueprint $table) {
      $table->increments('user_acct_id');
      $table->enum('createDB', ['true', 'false']);
      $table->enum('dropDB', ['true', 'false']);
      $table->enum('createTBL', ['true', 'false']);
      $table->enum('dropTBL', ['true', 'false']);
      $table->enum('alterTBL', ['true', 'false']);
      $table->integer('student_id')->unsigned()->nullable();
    });

    Schema::table('user_acct_tbl', function($table) {
      $table->foreign('student_id')->references('student_id')->on('student')->onDelete('RESTRICT')->onUpdate('RESTRICT');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('user_acct_tbl');
  }
}
