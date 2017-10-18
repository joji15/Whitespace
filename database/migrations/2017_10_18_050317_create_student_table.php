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
            $table->increments('stud_id');
            $table->integer('class_id')->nullable();
            $table->string('first_Name');
            $table->string('middle_Name');
            $table->string('last_Name');
            $table->string('email');
            $table->string('degree_Program');
            $table->string('section');
            $table->string('address');
            $table->string('contact_no')->unique();
            $table->string('password');
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
