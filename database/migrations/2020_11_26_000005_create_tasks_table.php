<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->datetime('date_start')->nullable();
            $table->datetime('date_end');
            $table->longText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}