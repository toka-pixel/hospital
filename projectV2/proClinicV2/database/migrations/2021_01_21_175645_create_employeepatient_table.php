<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeepatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeepatient', function (Blueprint $table) {
            $table->integer('empid');
            $table->integer('patid')->index('patid');
            $table->string('state', 100)->nullable();
            $table->string('medicine', 100)->nullable();
            $table->timestamps();
            $table->primary(['empid', 'patid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employeepatient');
    }
}
