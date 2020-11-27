<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEmployeeHistoryJobsTable extends Migration
{
    public function up()
    {
        Schema::table('employee_history_jobs', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id', 'employee_fk_2654499')->references('id')->on('employees');
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id', 'job_fk_2654500')->references('id')->on('job_titles');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id', 'department_fk_2654501')->references('id')->on('company_structures');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_2654509')->references('id')->on('users');
        });
    }
}