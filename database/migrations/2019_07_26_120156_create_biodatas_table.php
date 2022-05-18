<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('catin_id');
            $table->integer('tipe_data_id');
            $table->string('nama_lengkap');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('warga_negara');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->text('tempat_tinggal');
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
        Schema::dropIfExists('biodatas');
    }
}
