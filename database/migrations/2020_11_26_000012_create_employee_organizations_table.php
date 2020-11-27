<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeOrganizationsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_organizations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('role');
            $table->string('periode')->nullable();
            $table->longText('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}