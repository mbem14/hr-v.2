<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEmployeeTrainingSessionsTable extends Migration
{
    public function up()
    {
        Schema::table('employee_training_sessions', function (Blueprint $table) {
            $table->unsignedBigInteger('training_session_id');
            $table->foreign('training_session_id', 'training_session_fk_2654913')->references('id')->on('training_sessions');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_2654920')->references('id')->on('users');
        });
    }
}