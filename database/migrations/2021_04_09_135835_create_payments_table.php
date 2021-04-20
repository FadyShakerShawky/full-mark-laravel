<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->enum('MethodOfPayment', ['paypal','fawry', 'visa']);
            $table->unsignedBigInteger('students_id');
            $table->enum('status', ['pending','processing','completed','decline'])->default('pending');
            $table->unsignedBigInteger('group_student_id');
            $table->float('total');
            $table->boolean('is_paid')->default(false);
            $table->timestamps();
            $table->unsignedBigInteger('paypal_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}