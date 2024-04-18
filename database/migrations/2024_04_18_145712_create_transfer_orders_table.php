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
        Schema::create('transfer_orders', function (Blueprint $table) {
            $table->integer('id_transfer_order', true);
            $table->integer('id_emp')->nullable()->index('id_emp');
            $table->integer('id_user')->nullable();
            $table->integer('id_from_station')->nullable()->index('id_from_station');
            $table->integer('id_to_station')->nullable()->index('id_to_station');
            $table->string('title_transfer_order')->nullable();
            $table->boolean('is_confirmed')->nullable();
            $table->string('desc')->nullable();
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
        Schema::dropIfExists('transfer_orders');
    }
};
