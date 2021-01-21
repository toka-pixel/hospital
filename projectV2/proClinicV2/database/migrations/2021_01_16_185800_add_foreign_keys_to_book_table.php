<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book', function (Blueprint $table) {
            $table->foreign('empid', 'book_ibfk_1')->references('idemployee')->on('employee')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('patid', 'book_ibfk_2')->references('idpatient')->on('patient')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('idapp', 'book_ibfk_3')->references('appid')->on('appointment')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book', function (Blueprint $table) {
            $table->dropForeign('book_ibfk_1');
            $table->dropForeign('book_ibfk_2');
            $table->dropForeign('book_ibfk_3');
        });
    }
}
