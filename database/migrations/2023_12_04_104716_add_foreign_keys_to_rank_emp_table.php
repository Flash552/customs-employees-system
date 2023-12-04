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
        Schema::table('rank_emp', function (Blueprint $table) {
            $table->foreign(['id_type_emp'], 'rank_emp_ibfk_1')->references(['id_type_emp'])->on('type_emp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rank_emp', function (Blueprint $table) {
            $table->dropForeign('rank_emp_ibfk_1');
        });
    }
};
