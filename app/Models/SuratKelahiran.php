<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKelahiran extends Model
{
    protected $fillable = ['no_surat', 'nama_anak', 'anak_ke', 'tempat_lahir', 'tanggal_lahir',  'waktu_lahir', 'jenis_kelamin', 'agama', 'nama_ibu_kandung', 'nama_ayah_kandung', 'alamat', 'pejabat_mengetahui',];

    public function sql()
    {
        return $this
        ->select(
            $this->table . '.no_surat',
            $this->table . '.nama_anak',
            $this->table . '.anak_ke',
            $this->table . '.tempat_lahir',
            $this->table . '.tanggal_lahir',
            $this->table . '.waktu_lahir',
            $this->table . '.jenis_kelamin',
            $this->table . '.agama',
            $this->table . '.nama_ibu_kandung',
            $this->table . '.nama_ayah_kandung',
            $this->table . '.alamat',
            $this->table . '.pejabat_mengetahui'
            )->orderBy(
                $this->table . 'id'
            );
    }
}
