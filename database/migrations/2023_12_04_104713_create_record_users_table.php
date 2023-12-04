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
        Schema::create('record_users', function (Blueprint $table) {
            $table->integer('id_record')->primary();
            $table->integer('PID_emp');
            $table->integer('id_user')->index('id_user');
            $table->integer('id_type_record')->index('id_type_record');  $table->timestamps();
            $table->dateTime('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('record_users');
    }
};
