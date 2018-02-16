<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('employees', function($table) {
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('street')->nullable();
            $table->string('zip')->nullable();
            $table->string('ktptitle')->nullable();
            $table->string('ktpfilename')->nullable();
            $table->string('position')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('employees', function($table) {
            $table->dropColumn('province');
            $table->dropColumn('city');
            $table->dropColumn('street');
            $table->dropColumn('zip');
            $table->dropColumn('ktptitle');
            $table->dropColumn('ktpfilename');
            $table->dropColumn('position');
        });
    }
}
