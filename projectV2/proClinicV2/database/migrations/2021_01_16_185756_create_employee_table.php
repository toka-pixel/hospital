<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->integer('idemployee', true);
            $table->string('name', 100)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('password', 40)->nullable();
            $table->string('skills', 300)->nullable();
            $table->integer('max')->nullable();
            $table->string('job', 100)->nullable();
            $table->string('image', 100)->nullable();
            $table->string('gender', 100)->nullable();
            $table->date('birthdate')->nullable();
            $table->integer('idep')->nullable()->index('idep');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
