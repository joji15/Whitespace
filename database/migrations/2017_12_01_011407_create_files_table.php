<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::enableForeignKeyConstraints();
       Schema::create('files_tbl', function (Blueprint $table) {
         $table->increments('file_id');
         $table->string('file_name', 300);
         $table->timestamp('created_at');
         $table->integer('prof_id')->unsigned()->nullable();
       });

       Schema::table('files_tbl', function($table) {
         $table->foreign('prof_id')->references('prof_id')->on('professor')->onDelete('RESTRICT')->onUpdate('RESTRICT');
       });
     }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('files_tbl');
     }
}
