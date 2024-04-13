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
        Schema::table('emp_trams', function (Blueprint $table) {
            $table->foreign(['id_emp'], 'emp_trams_ibfk_1')->references(['id_emp'])->on('employees');
            $table->foreign(['id_to_station'], 'emp_trams_ibfk_3')->references(['id_station'])->on('stations');
            $table->foreign(['id_from_station'], 'emp_trams_ibfk_2')->references(['id_station'])->on('stations');
            $table->foreign(['id_transfer_order'], 'emp_trams_ibfk_4')->references(['id_transfer_order'])->on('transfer_orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emp_trams', function (Blueprint $table) {
            $table->dropForeign('emp_trams_ibfk_1');
            $table->dropForeign('emp_trams_ibfk_3');
            $table->dropForeign('emp_trams_ibfk_2');
            $table->dropForeign('emp_trams_ibfk_4');
        });
    }
};
