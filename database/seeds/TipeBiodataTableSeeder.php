<?php

use Illuminate\Database\Seeder;
use App\TipeData;

class TipeBiodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipe_data = new TipeData();
        $tipe_data->id = 1;
        $tipe_data->nama = 'CPP';
        $tipe_data->save();

        $tipe_data = new TipeData();
        $tipe_data->id = 2;
        $tipe_data->nama = 'CPW';
        $tipe_data->save();

        $tipe_data = new TipeData();
        $tipe_data->id = 3;
        $tipe_data->nama = 'IBU_CPP';
        $tipe_data->save();

        $tipe_data = new TipeData();
        $tipe_data->id = 4;
        $tipe_data->nama = 'IBU_CPW';
        $tipe_data->save();

        $tipe_data = new TipeData();
        $tipe_data->id = 5;
        $tipe_data->nama = 'BAPAK_CPP';
        $tipe_data->save();

        $tipe_data = new TipeData();
        $tipe_data->id = 6;
        $tipe_data->nama = 'BAPAK_CPW';
        $tipe_data->save();

        $tipe_data = new TipeData();
        $tipe_data->id = 7;
        $tipe_data->nama = 'WALI';
        $tipe_data->save();

        $tipe_data = new TipeData();
        $tipe_data->id = 8;
        $tipe_data->nama = 'SAKSI_CPP';
        $tipe_data->save();

        $tipe_data = new TipeData();
        $tipe_data->id = 9;
        $tipe_data->nama = 'SAKSI_CPW';
        $tipe_data->save();
    }
}
