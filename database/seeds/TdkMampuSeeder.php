<?php

use Illuminate\Database\Seeder;

class TdkMampuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new \App\Models\SuratTidakMampu();
        
        $item->no_surat = 1234456;
        $item->penduduk_id = 1;
        $item->tanggal =10/10/2020;
        $item->keterangan = 'persyaratan';
        $item->pejabat_mengetahui = 'kepala desa';
    }
}
