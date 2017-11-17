<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->integer('stud_id')->unsigned()->primary();
            $table->integer('class_id')->unsigned()->foreign('class_id')->references('class_id')->on('class_tbl');
            $table->string('student_name', 150);
            $table->string('email', 50);
            $table->string('degree_Program', 10);
            $table->string('section', 10);
            $table->string('password', 100);
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
