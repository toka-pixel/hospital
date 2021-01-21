<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEmployeepatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employeepatient', function (Blueprint $table) {
            $table->foreign('empid', 'employeepatient_ibfk_1')->references('idemployee')->on('employee')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('patid', 'employeepatient_ibfk_2')->references('idpatient')->on('patient')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employeepatient', function (Blueprint $table) {
            $table->dropForeign('employeepatient_ibfk_1');
            $table->dropForeign('employeepatient_ibfk_2');
        });
    }
}
