<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndirectsup2ToEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->unsignedBigInteger('indirect_supervisors2_id')->nullable()->after('indirect_supervisors_id');
            $table->foreign('indirect_supervisors2_id', 'indirect_supervisors2_fk_2642174')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            //
        });
    }
}
