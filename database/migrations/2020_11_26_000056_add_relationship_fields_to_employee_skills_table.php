<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEmployeeSkillsTable extends Migration
{
    public function up()
    {
        Schema::table('employee_skills', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id', 'employee_fk_2648164')->references('id')->on('employees');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_2648168')->references('id')->on('users');
        });
    }
}