<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeAppraisalsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_appraisals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('pilih_1', 15, 2)->nullable();
            $table->float('pilih_2', 15, 2)->nullable();
            $table->float('pilih_3', 15, 2)->nullable();
            $table->float('pilih_4', 15, 2)->nullable();
            $table->float('pilih_5', 15, 2)->nullable();
            $table->float('pilih_6', 15, 2)->nullable();
            $table->float('pilih_7', 15, 2)->nullable();
            $table->float('pilih_8', 15, 2)->nullable();
            $table->float('pilih_9', 15, 2)->nullable();
            $table->float('pilih_10', 15, 2)->nullable();
            $table->float('pilih_11', 15, 2)->nullable();
            $table->float('pilih_12', 15, 2)->nullable();
            $table->float('pilih_13', 15, 2)->nullable();
            $table->float('pilih_14', 15, 2)->nullable();
            $table->float('pilih_15', 15, 2)->nullable();
            $table->float('pilih_16', 15, 2)->nullable();
            $table->float('pilih_17', 15, 2)->nullable();
            $table->float('pilih_18', 15, 2)->nullable();
            $table->float('pilih_19', 15, 2)->nullable();
            $table->float('pilih_20', 15, 2)->nullable();
            $table->float('target_1', 15, 2)->nullable();
            $table->float('target_2', 15, 2)->nullable();
            $table->float('target_3', 15, 2)->nullable();
            $table->float('target_4', 15, 2)->nullable();
            $table->float('target_5', 15, 2)->nullable();
            $table->float('reali_1', 15, 2)->nullable();
            $table->float('reali_2', 15, 2)->nullable();
            $table->float('reali_3', 15, 2)->nullable();
            $table->float('reali_4', 15, 2)->nullable();
            $table->float('reali_5', 15, 2)->nullable();
            $table->float('nilai_1', 15, 2)->nullable();
            $table->float('nilai_2', 15, 2)->nullable();
            $table->float('nilai_3', 15, 2)->nullable();
            $table->float('nilai_4', 15, 2)->nullable();
            $table->float('nilai_5', 15, 2)->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
