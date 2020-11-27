<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeEmployeeTrainingSessionPivotTable extends Migration
{
    public function up()
    {
        Schema::create('employee_employee_training_session', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_training_session_id');
            $table->foreign('employee_training_session_id', 'employee_training_session_id_fk_2654912')->references('id')->on('employee_training_sessions')->onDelete('cascade');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id', 'employee_id_fk_2654912')->references('id')->on('employees')->onDelete('cascade');
        });
    }
}