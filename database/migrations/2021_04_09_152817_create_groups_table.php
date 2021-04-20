<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->text("description");
            $table->integer("max_no_student");
            $table->date("start_date");
            $table->date("end_date");
            $table->time("start_time")->nullable();
            $table->time("end_time")->nullable();
            $table->integer("no_lec");
            $table->decimal("price",$precision = 10, $scale = 2);
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')
                                        ->on('teachers')
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');
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
        Schema::dropIfExists('groups');
    }
}