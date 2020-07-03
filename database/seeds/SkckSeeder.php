<?php

use Illuminate\Database\Seeder;

class SkckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new \App\Models\SuratSkck();
        
        $item->no_surat = 1234456;
        $item->penduduk_id = 1;
        $item->peruntukan_surat = 'persyaratan';
        $item->keterangan = 'penting';
        $item->pejabat_mengetahui ='kades';
    }
}
