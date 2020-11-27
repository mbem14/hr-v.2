<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTitlesTable extends Migration
{
    public function up()
    {
        Schema::create('job_titles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('name');
            $table->longText('main_purpose')->nullable();
            $table->longText('responsibility')->nullable();
            $table->longText('result')->nullable();
            $table->longText('challange')->nullable();
            $table->longText('authority')->nullable();
            $table->longText('internal_relation')->nullable();
            $table->longText('external_relation')->nullable();
            $table->longText('financial_dimension')->nullable();
            $table->longText('hr_dimension')->nullable();
            $table->longText('qualification')->nullable();
            $table->longText('training_need')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
