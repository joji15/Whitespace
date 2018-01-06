<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablesTbl extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
          Schema::enableForeignKeyConstraints();
          Schema::create('table_tbl', function (Blueprint $table) {
               $table->increments('table_id');
               $table->string('table_name', 200);
               $table->integer('database_id')->unsigned()->nullable();
          });

          Schema::table('table_tbl', function($table) {
               $table->foreign('database_id')->references('database_id')->on('database_tbl')->onDelete('RESTRICT')->onUpdate('RESTRICT');
          });
     }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
          Schema::dropIfExists('table_tbl');
     }
}
