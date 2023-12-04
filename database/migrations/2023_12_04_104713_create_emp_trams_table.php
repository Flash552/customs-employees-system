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
        Schema::create('emp_trams', function (Blueprint $table) {
            $table->integer('id_tran')->primary();
            $table->integer('id_emp')->index('id_emp');
            $table->integer('id_from_station')->index('id_from_station');
            $table->integer('id_to_station')->index('id_to_station');
            $table->boolean('confirm_first');
            $table->date('confirm_date_first');
            $table->boolean('confirm_two');
            $table->date('confirm_date_two');  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_trams');
    }
};
