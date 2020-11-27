<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeHistoryJobsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_history_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_start');
            $table->date('date_end')->nullable();
            $table->longText('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}