<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEmployeeNonFormalEducationsTable extends Migration
{
    public function up()
    {
        Schema::table('employee_non_formal_educations', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_2654407')->references('id')->on('users');
        });
    }
}