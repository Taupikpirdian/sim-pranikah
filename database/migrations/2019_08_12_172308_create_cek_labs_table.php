<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCekLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cek_labs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('biodata_id');
            $table->string('dokter');
            $table->string('pemeriksa');
            $table->string('hgb_hb');
            $table->string('glukosa');
            $table->string('goldar');
            $table->string('hbsag');
            $table->string('syphilis');
            $table->string('hiv_aids');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cek_labs');
    }
}
