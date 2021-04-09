<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_students', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('student_id');
            // $table->foreign('student_id')->references('id')
            //                             ->on('students')
            //                             ->onUpdate('cascade')
            //                             ->onDelete('cascade');

            $table->unsignedBigInteger('group_id');
            // $table->foreign('group_id')->references('id')
            //                             ->on('groups')
            //                             ->onUpdate('cascade')
            //                             ->onDelete('cascade');

            $table->unsignedBigInteger('course_teacher_id');
            // $table->foreign('course_teacher_id')->references('id')
            //                             ->on('course_teachers')
            //                             ->onUpdate('cascade')
            //                             ->onDelete('cascade');
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
        Schema::dropIfExists('group_students');
    }
}
