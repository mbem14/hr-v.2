<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeCertificationsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_certifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('certification');
            $table->string('institute');
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}