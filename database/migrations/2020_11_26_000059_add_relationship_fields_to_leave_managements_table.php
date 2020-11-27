<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToLeaveManagementsTable extends Migration
{
    public function up()
    {
        Schema::table('leave_managements', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id', 'employee_fk_2648539')->references('id')->on('employees');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_2648547')->references('id')->on('users');
            $table->unsignedBigInteger('leave_type_id');
            $table->foreign('leave_type_id', 'leave_type_fk_2648629')->references('id')->on('leave_types');
            $table->unsignedBigInteger('leave_periode_id');
            $table->foreign('leave_periode_id', 'leave_periode_fk_2648630')->references('id')->on('leave_periods');
        });
    }
}