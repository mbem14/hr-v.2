<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCompanyStructuresTable extends Migration
{
    public function up()
    {
        Schema::table('company_structures', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id', 'parent_fk_2637835')->references('id')->on('company_structures');
        });
    }
}