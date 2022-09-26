<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->Increments('student_id');
            $table->string('teacher_id');
            $table->date('date');
            $table->integer('class_num');
            $table->integer('subject_id');
            $table->string('class_topic');
            $table->string('homework');
            $table->string('next_topic');
            $table->string('comment');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
