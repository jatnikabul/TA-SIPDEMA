<?php

use Illuminate\Database\Seeder;

class KematianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new \App\Models\SuratKematian();
        
        $item->no_surat = 1234456;
        $item->penduduk_id = 1;
        $item->hari = 'minggu';
        $item->waktu = '10:00';
        $item->tanggal =10/01/2021;
        $item->meninggal_di = 'rumah';
        $item->disebabkan_karena = 'sakit';
        $item->nama_yang_melaporkan = 'dodi';
        $item->hubungan_dengan_yang_meninggal = 'paman';
        $item->pejabat_mengetahui = 'kepala desa';
    }
}
