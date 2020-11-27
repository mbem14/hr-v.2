<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeLanguagesTable extends Migration
{
    public function up()
    {
        Schema::create('employee_languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reading');
            $table->string('speaking');
            $table->string('writing');
            $table->string('listening');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}