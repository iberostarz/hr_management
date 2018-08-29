<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('emp_no')->nullable()->default(null);
            $table->string('fname')->nullable()->default(null);
            $table->string('mname', 100)->nullable()->default(null);
            $table->string('lname')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->date('dob')->nullable()->default(null);
            $table->string('gender', 45)->nullable()->default(null);
            $table->string('phone', 45)->nullable()->default(null);
            $table->string('trn', 45)->nullable()->default(null);
            $table->string('nis', 45)->nullable()->default(null);
            $table->string('nationality', 100)->nullable()->default(null);
            $table->date('contract_start_date')->nullable()->default(null);
            $table->date('official_start_date')->nullable()->default(null);
            $table->date('last_date_work')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
