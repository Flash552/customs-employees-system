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
        Schema::create('emp_transfers', function (Blueprint $table) {
            $table->integer('id_tran', true);
            $table->integer('id_emp')->nullable()->index('id_emp');
            $table->integer('id_transfer_order')->nullable()->index('id_transfer_order');
            $table->boolean('confirm_first')->nullable();
            $table->date('confirm_date_first')->nullable();
            $table->boolean('confirm_two')->nullable();
            $table->date('confirm_date_two')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_transfers');
    }
};
