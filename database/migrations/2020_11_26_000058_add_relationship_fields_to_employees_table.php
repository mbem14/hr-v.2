<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToEmployeesTable extends Migration
{
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->unsignedBigInteger('job_title_id');
            $table->foreign('job_title_id', 'job_title_fk_2639323')->references('id')->on('job_titles');
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id', 'department_fk_2639335')->references('id')->on('company_structures');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_2641759')->references('id')->on('countries');
            $table->unsignedBigInteger('nationality_id')->nullable();
            $table->foreign('nationality_id', 'nationality_fk_2642168')->references('id')->on('countries');
            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id', 'province_fk_2642170')->references('id')->on('provinces');
            $table->unsignedBigInteger('supervisor_id');
            $table->foreign('supervisor_id', 'supervisor_fk_2642173')->references('id')->on('employees');
            $table->unsignedBigInteger('indirect_supervisors_id')->nullable();
            $table->foreign('indirect_supervisors_id', 'indirect_supervisors_fk_2642174')->references('id')->on('employees');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_2642192')->references('id')->on('users');
            $table->unsignedBigInteger('employment_status_id');
            $table->foreign('employment_status_id', 'employment_status_fk_2648385')->references('id')->on('employment_statuses');
        });
    }
}
