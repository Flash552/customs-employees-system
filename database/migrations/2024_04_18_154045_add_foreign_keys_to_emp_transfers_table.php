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
        Schema::table('emp_transfers', function (Blueprint $table) {
            $table->foreign(['id_emp'], 'emp_transfers_ibfk_1')->references(['id_emp'])->on('employees');
            $table->foreign(['id_transfer_order'], 'emp_transfers_ibfk_2')->references(['id_transfer_order'])->on('transfer_orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emp_transfers', function (Blueprint $table) {
            $table->dropForeign('emp_transfers_ibfk_1');
            $table->dropForeign('emp_transfers_ibfk_2');
        });
    }
};
