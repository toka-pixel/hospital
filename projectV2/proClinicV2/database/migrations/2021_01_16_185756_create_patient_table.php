<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->integer('idpatient', true);
            $table->string('name', 100)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('password', 40)->nullable();
            $table->date('birthdatepa')->nullable();
            $table->string('bloodtype', 100)->nullable();
            $table->string('chronicDiseases', 100)->nullable();
            $table->string('imagepatient', 100)->nullable();
            $table->string('gender', 100)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient');
    }
}
