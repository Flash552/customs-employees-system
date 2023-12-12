<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacations', function (Blueprint $table) {
            $table->foreign(['id_emp'], 'vacations_ibfk_1')->references(['id_emp'])->on('employees');
            $table->foreign(['id_vacation_type'], 'vacations_ibfk_2')->references(['id_vacation_type'])->on('vacation_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacations', function (Blueprint $table) {
            $table->dropForeign('vacations_ibfk_1');
            $table->dropForeign('vacations_ibfk_2');
        });
    }
};
