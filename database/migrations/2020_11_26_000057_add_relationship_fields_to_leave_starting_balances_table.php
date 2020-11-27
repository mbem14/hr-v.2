<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToLeaveStartingBalancesTable extends Migration
{
    public function up()
    {
        Schema::table('leave_starting_balances', function (Blueprint $table) {
            $table->unsignedBigInteger('leave_type_id');
            $table->foreign('leave_type_id', 'leave_type_fk_2650271')->references('id')->on('leave_types');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id', 'employee_fk_2650272')->references('id')->on('employees');
            $table->unsignedBigInteger('leave_period_id');
            $table->foreign('leave_period_id', 'leave_period_fk_2650273')->references('id')->on('leave_periods');
        });
    }
}