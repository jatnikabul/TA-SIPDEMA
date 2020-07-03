<?php

use Illuminate\Database\Seeder;

class UsahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new \App\Models\SuratUsaha();
        
        $item->no_surat = 1234456;
        $item->penduduk_id = 1;
        $item->jenis_usaha = 'warung';
        $item->nama_perusahaan ='Makmur jaya';
        $item->keterangan = 'persyaratan';
        $item->pejabat_mengetahui = 'kepala desa';
    }
}
