<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnTipeDataIdOnKesehatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kesehatans', function (Blueprint $table) {
            $table->integer('tipe_data_id')->after('catin_id')->nullable();
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
            $table->dropColumn('tipe_data_id');
        });
    }
}
