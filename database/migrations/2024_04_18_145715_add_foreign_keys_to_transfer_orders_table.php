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
        Schema::table('transfer_orders', function (Blueprint $table) {
            $table->foreign(['id_from_station'], 'transfer_orders_ibfk_2')->references(['id_station'])->on('stations');
            $table->foreign(['id_emp'], 'transfer_orders_ibfk_1')->references(['id_emp'])->on('employees');
            $table->foreign(['id_to_station'], 'transfer_orders_ibfk_3')->references(['id_station'])->on('stations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transfer_orders', function (Blueprint $table) {
            $table->dropForeign('transfer_orders_ibfk_2');
            $table->dropForeign('transfer_orders_ibfk_1');
            $table->dropForeign('transfer_orders_ibfk_3');
        });
    }
};
