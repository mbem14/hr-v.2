<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyStructuresTable extends Migration
{
    public function up()
    {
        Schema::create('company_structures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('description');
            $table->string('type');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}