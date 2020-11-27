<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavePeriodsTable extends Migration
{
    public function up()
    {
        Schema::create('leave_periods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('date_start');
            $table->date('end_date');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}