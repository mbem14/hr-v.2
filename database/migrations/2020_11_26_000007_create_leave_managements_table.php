<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveManagementsTable extends Migration
{
    public function up()
    {
        Schema::create('leave_managements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_start');
            $table->date('end_start');
            $table->longText('details')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}