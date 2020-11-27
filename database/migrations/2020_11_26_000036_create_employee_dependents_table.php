<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDependentsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_dependents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('relationship');
            $table->date('dob');
            $table->string('idcard')->nullable();
            $table->longText('address')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}