<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadTbl extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
          Schema::enableForeignKeyConstraints();
          Schema::create('upload_tbl', function (Blueprint $table) {
               $table->increments('upload_id');
               $table->string('file_name', 250);
               $table->timestamps();
               $table->integer('prof_id')->unsigned()->nullable();
          });

          Schema::table('upload_tbl', function($table) {
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
          Schema::dropIfExists('upload_tbl');
     }
}
