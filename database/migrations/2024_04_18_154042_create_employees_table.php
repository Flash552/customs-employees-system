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
            $table->integer('id_emp', true);
            $table->integer('PID_emp')->nullable();
            $table->string('name', 150)->nullable();
            $table->integer('phone')->nullable();
            $table->integer('id_jop')->nullable()->index('id_jop');
            $table->integer('id_state')->nullable()->index('id_state');
            $table->integer('id_type_emp')->nullable()->index('id_type_emp');
            $table->integer('id_rank')->nullable()->index('id_rank');
            $table->char('image', 1)->nullable();
            $table->integer('id_station')->nullable()->index('id_station');
            $table->date('start_date')->nullable();
            $table->date('stop_date')->nullable();
            $table->date('premotion_date')->nullable();
            $table->date('last_premotion_date')->nullable();
            $table->string('end_duty_resson')->nullable();
            $table->string('mother_name', 100)->nullable();
            $table->tinyInteger('sex')->nullable();
            $table->string('national_number', 20)->nullable();
            $table->integer('id_marital_state')->nullable()->index('id_marital_state');
            $table->string('id_number', 20)->nullable();
            $table->string('passport_number', 20)->nullable();
            $table->string('decision_number', 20)->nullable();
            $table->string('expertise', 100)->nullable();
            $table->date('expertise_start_date')->nullable();
            $table->string('email', 20)->nullable();
            $table->string('bank_name', 50)->nullable();
            $table->string('bank_branch', 50)->nullable();
            $table->string('bank_account_id', 20)->nullable();
            $table->date('decision_date')->nullable();
            $table->date('birthdate')->nullable();
            $table->date('start_duty_date')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
