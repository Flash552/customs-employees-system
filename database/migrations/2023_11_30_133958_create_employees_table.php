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
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('id_emp')->primary();
            $table->integer('PID_emp')->unique();
            $table->string('name');
            $table->integer('phone')->unique();
            $table->integer('id_jop')->index('id_jop');
            $table->integer('status_id')->index('status_id');
            $table->integer('emp_type_id')->index('emp_type_id');
            $table->integer('rank_id');
            $table->char('image', 16);
            $table->integer('id_station')->index('id_station');
            $table->boolean('isDeleted');
            $table->date('start_date');
            $table->date('stop_date');
            $table->date('remotion_date');
            $table->string('end_duty_resson');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
