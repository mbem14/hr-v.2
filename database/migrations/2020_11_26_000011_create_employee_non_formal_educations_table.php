<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeNonFormalEducationsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_non_formal_educations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->string('level')->nullable();
            $table->longText('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}