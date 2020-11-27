<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveStartingBalancesTable extends Migration
{
    public function up()
    {
        Schema::create('leave_starting_balances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('amount', 15, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}