<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_number');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('birthday');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('id_card');
            $table->date('joined_date');
            $table->date('confirmation_date')->nullable();
            $table->date('terminate_date')->nullable();
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('work_phone');
            $table->string('work_email')->unique();
            $table->string('private_email')->unique();
            $table->string('front_title')->nullable();
            $table->string('back_title')->nullable();
            $table->string('birth_place');
            $table->string('religion');
            $table->string('blood_type')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('number_decree')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
