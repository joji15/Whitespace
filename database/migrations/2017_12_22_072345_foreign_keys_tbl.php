<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeysTbl extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::enableForeignKeyConstraints();
    Schema::create('foreign_tbl', function (Blueprint $table) {
      $table->increments('foreign_id');
      $table->integer('foreign_col_id')->unsigned()->nullable();
      $table->integer('reference_pri_col_id')->unsigned()->nullable();
    });

    Schema::table('foreign_tbl', function($table) {
      $table->foreign('foreign_col_id')->references('foreign_col_id')->on('columns_tbl')->onDelete('RESTRICT')->onUpdate('RESTRICT');
      $table->foreign('reference_pri_col_id')->references('reference_pri_col_id')->on('columns_tbl')->onDelete('RESTRICT')->onUpdate('RESTRICT');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('foreign_tbl');
  }
}
