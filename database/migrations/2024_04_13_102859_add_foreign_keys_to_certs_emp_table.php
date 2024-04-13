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
        Schema::table('certs_emp', function (Blueprint $table) {
            $table->foreign(['id_emp'], 'certs_emp_ibfk_1')->references(['id_emp'])->on('employees');
            $table->foreign(['id_type_certs'], 'certs_emp_ibfk_2')->references(['id_type_certs'])->on('type_certs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('certs_emp', function (Blueprint $table) {
            $table->dropForeign('certs_emp_ibfk_1');
            $table->dropForeign('certs_emp_ibfk_2');
        });
    }
};
