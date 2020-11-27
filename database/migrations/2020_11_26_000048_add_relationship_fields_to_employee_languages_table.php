<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEmployeeLanguagesTable extends Migration
{
    public function up()
    {
        Schema::table('employee_languages', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id', 'employee_fk_2654524')->references('id')->on('employees');
            $table->unsignedBigInteger('languages_id');
            $table->foreign('languages_id', 'languages_fk_2654525')->references('id')->on('languages');
        });
    }
}