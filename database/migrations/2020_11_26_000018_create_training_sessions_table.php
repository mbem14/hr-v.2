<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('training_sessions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->datetime('scheduled');
            $table->datetime('due_date')->nullable();
            $table->string('delivery_method')->nullable();
            $table->string('location')->nullable();
            $table->string('attendance_type');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
