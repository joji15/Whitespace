<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
        {
          Schema::enableForeignKeyConstraints();
          Schema::create('history_tbl', function (Blueprint $table) {
            $table->increments('history_id');
            $table->string('query_text', 250);
            $table->timestamp('created_at');
            $table->integer('student_id')->unsigned()->nullable();
          });

          Schema::table('history_tbl', function($table) {
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
          Schema::dropIfExists('history_tbl');
        }
}
