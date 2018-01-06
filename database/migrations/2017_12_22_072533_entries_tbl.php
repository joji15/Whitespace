<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EntriesTbl extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::enableForeignKeyConstraints();
    Schema::create('entries_tbl', function (Blueprint $table) {
      $table->increments('entry_id');
      $table->string('entry_value', 255);
      $table->timestamps();
      $table->integer('column_id')->unsigned()->nullable();
    });

    Schema::table('entries_tbl', function($table) {
      $table->foreign('column_id')->references('column_id')->on('columns_tbl')->onDelete('RESTRICT')->onUpdate('RESTRICT');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('entries_tbl');
  }
}
