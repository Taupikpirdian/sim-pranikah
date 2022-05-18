<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateN1FormulirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('n1_formulirs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('biodata_id');
            $table->integer('tipe_data_id');
            $table->string('bin_binti');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('nomor_surat')->nullable();
            $table->string('status_pernikahan');
            $table->string('nama_mantan_pasangan')->nullable();
            $table->string('kota_pembuatan');
            $table->date('tanggal_pembuatan');
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
        Schema::dropIfExists('n1_formulirs');
    }
}
