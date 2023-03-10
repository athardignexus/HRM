<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_deduction_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emp_id')->unsigned();
            $table->foreignId('user_id')->unsigned();
            $table->foreignId('head_id')->unsigned();
            $table->decimal('amount',10,2)->nullable();
            $table->timestamps();
            $table->foreign('emp_id')->on('employees')->references('id')->cascadeOnDelete();
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
            $table->foreign('head_id')->on('deductions')->references('id')->cascadeOnDelete();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_deduction_details');
    }
};
