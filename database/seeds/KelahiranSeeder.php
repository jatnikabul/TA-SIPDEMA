<?php

use Illuminate\Database\Seeder;

class KelahiranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new \App\Models\SuratKelahiran();
        
        $item->no_surat = 1234456;
        $item->nama_anak = 'Abdul';
        $item->tempat_lahir = 'rumah sakit';
        $item->tanggal_lahir = 12/05/2019;
        $item->waktu_lahir =10;
        $item->jenis_kelamin = 'laki-laki';
        $item->anak_ke = '3';
        $item->agama = 'islam';
        $item->nama_ibu_kandung = 'syah';
        $item->nama_ayah_kandung = 'godan';
        $item->alamat = 'marengmang';
        $item->pejabat_mengetahui = 'kepala desa';
    }
}
