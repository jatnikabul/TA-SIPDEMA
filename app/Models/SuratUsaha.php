<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratUsaha extends Model
{
    protected $fillable = ['no_surat', 'penduduk_id', 'jenis_usaha', 'nama_perusahaan', 'penghasilan', 'keterangan', 'pejabat_mengetahui',];

    public function sql()
    {
        return $this
        ->select(
            $this->table . '.no_surat',
            $this->table . '.penduduk_id',
            $this->table . '.jenis_usaha',
            $this->table . '.nama_perusahaan',
            $this->table . '.penghasilan',
            $this->table . '.keterangan',
            $this->table . '.pejabat_mengetahui'
        )->orderBy(
            $this->table . 'id'
        );
    }
}
