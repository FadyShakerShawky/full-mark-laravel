<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCoulmnsPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            //
            $table->foreign('students_id')->references('id')
                                        ->on('students')
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade'); 

            $table->foreign('group_student_id')->references('id')
                                        ->on('group_students')
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            //
        });
    }
}
