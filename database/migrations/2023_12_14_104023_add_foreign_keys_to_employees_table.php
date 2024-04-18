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
        Schema::table('employees', function (Blueprint $table) {
            $table->foreign(['id_state'], 'employees_ibfk_5')->references(['id_state'])->on('status_emp');
            $table->foreign(['id_type_emp'], 'employees_ibfk_2')->references(['id_type_emp'])->on('type_emp');
            $table->foreign(['id_jop'], 'employees_ibfk_4')->references(['id_jop'])->on('jop_title');
            $table->foreign(['id_marital_state'], 'employees_ibfk_6')->references(['id_marital_state'])->on('marital_status');
            $table->foreign(['id_station'], 'employees_ibfk_1')->references(['id_station'])->on('stations');
            $table->foreign(['id_rank'], 'employees_ibfk_3')->references(['id_rank'])->on('rank_emp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign('employees_ibfk_5');
            $table->dropForeign('employees_ibfk_2');
            $table->dropForeign('employees_ibfk_4');
            $table->dropForeign('employees_ibfk_6');
            $table->dropForeign('employees_ibfk_1');
            $table->dropForeign('employees_ibfk_3');
        });
    }
};
