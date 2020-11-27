<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEmployeeAppraisalsTable extends Migration
{
    public function up()
    {
        Schema::table('employee_appraisals', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id', 'employee_fk_2663831')->references('id')->on('employees');
            $table->unsignedBigInteger('period_id')->nullable();
            $table->foreign('period_id', 'period_fk_2663832')->references('id')->on('appraisal_periodes');
            $table->unsignedBigInteger('evaluator_id');
            $table->foreign('evaluator_id', 'evaluator_fk_2663833')->references('id')->on('employees');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_2663873')->references('id')->on('users');
        });
    }
}