<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCoursesTable extends Migration
{
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->unsignedBigInteger('coordinator_id')->nullable();
            $table->foreign('coordinator_id', 'coordinator_fk_2654821')->references('id')->on('employees');
        });
    }
}