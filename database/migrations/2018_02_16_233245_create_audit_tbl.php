<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('audit_trail_tbl', function (Blueprint $table) {
          $table->increments('audit_id');
          $table->string('audit_transaction', 50);
          $table->string('audit_description', 100);
          $table->timestamp('created_at');
          $table->integer('student_id')->unsigned()->nullable();
          $table->integer('prof_id')->unsigned()->nullable();
        });

        Schema::table('audit_trail_tbl', function($table) {
          $table->foreign('student_id')->references('student_id')->on('student')->onDelete('RESTRICT')->onUpdate('RESTRICT');
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
        Schema::dropIfExists('audit_trail_tbl');
    }
}
