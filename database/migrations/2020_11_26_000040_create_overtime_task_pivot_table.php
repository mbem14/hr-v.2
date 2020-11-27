<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOvertimeTaskPivotTable extends Migration
{
    public function up()
    {
        Schema::create('overtime_task', function (Blueprint $table) {
            $table->unsignedBigInteger('overtime_id');
            $table->foreign('overtime_id', 'overtime_id_fk_2648441')->references('id')->on('overtimes')->onDelete('cascade');
            $table->unsignedBigInteger('task_id');
            $table->foreign('task_id', 'task_id_fk_2648441')->references('id')->on('tasks')->onDelete('cascade');
        });
    }
}