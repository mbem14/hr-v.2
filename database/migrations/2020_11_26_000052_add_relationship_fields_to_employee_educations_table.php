<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEmployeeEducationsTable extends Migration
{
    public function up()
    {
        Schema::table('employee_educations', function (Blueprint $table) {
            $table->unsignedBigInteger('education_id');
            $table->foreign('education_id', 'education_fk_2642428')->references('id')->on('education');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id', 'employee_fk_2642429')->references('id')->on('employees');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_2642436')->references('id')->on('users');
        });
    }
}