<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColumnsTbl extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::enableForeignKeyConstraints();
    Schema::create('columns_tbl', function (Blueprint $table) {
      $table->increments('column_id');
      $table->string('column_name', 200);
      $table->string('column_type', 50);
      $table->integer('column_length');
      $table->string('column_default', 50);
      $table->string('column_attributes', 50);
      $table->enum('column_null', ['true', 'false']);
      $table->enum('column_ai', ['true', 'false']);
      $table->integer('table_id')->unsigned()->nullable();
    });

    Schema::table('columns_tbl', function($table) {
      $table->foreign('table_id')->references('table_id')->on('table_tbl')->onDelete('RESTRICT')->onUpdate('RESTRICT');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('columns_tbl');
  }
}
