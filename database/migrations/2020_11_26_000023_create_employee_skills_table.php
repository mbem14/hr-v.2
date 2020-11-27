<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeSkillsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('skill');
            $table->longText('details')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}