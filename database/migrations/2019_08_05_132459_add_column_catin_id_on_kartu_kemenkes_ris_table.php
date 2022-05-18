<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCatinIdOnKartuKemenkesRisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kartu_kemenkes_ris', function (Blueprint $table) {
            $table->integer('catin_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bukti_tuntas', function (Blueprint $table) {
            $table->dropColumn('catin_id');
        });
    }
}
