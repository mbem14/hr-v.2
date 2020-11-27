<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTrainingSessionsTable extends Migration
{
    public function up()
    {
        Schema::table('training_sessions', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id', 'course_fk_2654884')->references('id')->on('courses');
        });
    }
}