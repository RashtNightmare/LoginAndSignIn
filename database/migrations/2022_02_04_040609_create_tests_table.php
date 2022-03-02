<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('score'); //total
            $table->integer('acceptance_quorum');
            $table->integer('amount');
            $table->string('title');
            $table->foreignId('major_id');
            $table->foreignId('lesson_id');
            $table->string('date');//I changed to string cuz of MariaDB version error
            $table->string('duration'); //per minuet - I changed to string cuz of MariaDB version error
            $table->string('start_time');//I changed to string cuz of MariaDB version error
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
        Schema::dropIfExists('tests');
    }
}
