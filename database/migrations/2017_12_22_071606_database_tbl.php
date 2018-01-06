<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatabaseTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::enableForeignKeyConstraints();
       Schema::create('database_tbl', function (Blueprint $table) {
         $table->increments('database_id');
         $table->string('database_name', 200);
         $table->integer('user_acct_id')->unsigned()->nullable();
       });

       Schema::table('database_tbl', function($table) {
         $table->foreign('user_acct_id')->references('user_acct_id')->on('user_acct_tbl')->onDelete('RESTRICT')->onUpdate('RESTRICT');
       });
     }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('database_tbl');
     }
}
