<?php

use Illuminate\Database\Seeder;

class KeramaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new \App\Models\SuratKeramaian();
        
        $item->no_surat = 1234456;
        $item->penduduk_id = 1;
        $item->acara = 'sunatan';
        $item->jenis_hiburan = 'dangdut';
        $item->waktu =10;
        $item->tempat = 'rumah';
        $item->tanggal = 12/05/2019;
        $item->keterangan = 'penting';
        $item->pejabat_mengetahui = 'kepala desa';
    }
}
