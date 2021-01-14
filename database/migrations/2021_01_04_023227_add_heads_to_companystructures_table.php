<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHeadsToCompanystructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('company_structures', function (Blueprint $table) {
            $table->unsignedBigInteger('heads_id')->nullable();
            $table->foreign('heads_id', 'heads_id_fk_2648630')->references('id')->on('employees');
        });
    }

   
}
