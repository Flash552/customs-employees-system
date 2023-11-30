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
            $table->integer('id_emp')->index('id_emp');
            $table->string('title_certs');
            $table->integer('id_type_certs')->index('id_type_certs');
            $table->char('certs_file', 16);
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
