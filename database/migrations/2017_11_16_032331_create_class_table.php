<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('class_tbl', function (Blueprint $table) {
          $table->integer('class_id')->unsigned()->primary();
          $table->string('crs_sec', 10);
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
      Schema::dropIfExists('class_tbl');
  }
}
