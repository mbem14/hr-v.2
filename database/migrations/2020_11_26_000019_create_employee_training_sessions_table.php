<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTrainingSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_training_sessions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('feedback')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}