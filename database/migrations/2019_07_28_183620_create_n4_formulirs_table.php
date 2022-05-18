<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateN4FormulirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('n4_formulirs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('biodata_id');
            $table->integer('biodata_bapak_id');
            $table->integer('biodata_ibu_id');
            $table->integer('data_tipe_id');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('nomor_surat');
            $table->string('nama_lurah');

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
        Schema::dropIfExists('n4_formulirs');
    }
}
