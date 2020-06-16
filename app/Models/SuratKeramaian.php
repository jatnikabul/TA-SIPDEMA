<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKeramaian extends Model
{
    protected $fillable = ['no_surat', 'penduduk_id', 'acara', 'jenis_hiburan', 'tempat', 'waktu', 'tanggal', 'keterangan',  'pejabat_mengetahui', ];

    public function sql()
    {
        return $this
        ->select(
            $this->table . '.no_surat',
            $this->table . '.penduduk_id',
            $this->table . '.acara',
            $this->table . '.jenis_hiburan',
            $this->table . '.tempat',
            $this->table . '.waktu',
            $this->table . '.tanggal',
            $this->table . '.keterangan',
            $this->table . '.pejabat_mengetahui'
        )->orderBy(
            $this->table . 'id'
        );
    }
}
