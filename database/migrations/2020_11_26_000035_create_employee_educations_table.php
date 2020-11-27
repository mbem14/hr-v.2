<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeEducationsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_educations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('institute');
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}