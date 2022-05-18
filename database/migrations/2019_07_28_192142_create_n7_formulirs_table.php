<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateN7FormulirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('n7_formulirs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('biodata_cpp_id');
            $table->integer('biodata_cpw_id');
            $table->integer('lampiran');
            $table->integer('lembar');
            $table->string('lokasi_pengiriman');
            $table->date('tanggal_pernikahan');
            $table->string('jam_pernikahan');
            $table->string('mas_kawin');
            $table->string('tempat_pernikahan');
            $table->date('tanggal_terima');
            $table->string('penerima');
            $table->string('pemberitahu');
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
        Schema::dropIfExists('n7_formulirs');
    }
}
