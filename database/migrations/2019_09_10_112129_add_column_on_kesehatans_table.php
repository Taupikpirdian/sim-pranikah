<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnOnKesehatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kesehatans', function (Blueprint $table) {
            $table->integer('cek_narkoba')->after('name');
            $table->integer('cek_cacat_badan')->after('cek_narkoba');
            $table->integer('cek_buta_warna')->after('cek_cacat_badan');
            $table->integer('td')->after('cek_buta_warna');
            $table->integer('tb')->after('td');
            $table->integer('bb')->after('tb');
            $table->string('goldar')->after('bb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kesehatans', function (Blueprint $table) {
            $table->dropColumn('cek_narkoba');
            $table->dropColumn('cek_cacat_badan');
            $table->dropColumn('cek_buta_warna');
            $table->dropColumn('td');
            $table->dropColumn('tb');
            $table->dropColumn('bb');
            $table->dropColumn('goldar');
        });
    }
}
