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
        Schema::create('certs_emp', function (Blueprint $table) {
            $table->integer('id_certs')->primary();
            $table->integer('id_emp')->nullable()->index('id_emp');
            $table->string('title_certs')->nullable();
            $table->integer('id_type_certs')->nullable()->index('id_type_certs');
            $table->char('certs_file', 16)->nullable();
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
        Schema::dropIfExists('certs_emp');
    }
};
