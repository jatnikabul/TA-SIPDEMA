<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratSkck extends Model
{
    protected $fillable = ['no_surat', 'penduduk_id', 'nik', 'pekerjaan', 'peruntukan_surat', 'keterangan', 'pejabat_mengetahui',];

    public function sql()
    {
        return $this
        ->select(
            $this->table . '.no_surat',
            $this->table . '.penduduk_id',
            $this->table . '.nik',
            $this->table . '.pekerjaan',
            $this->table . '.peruntukan_surat',
            $this->table . '.keterangan',
            $this->table . '.pejabat_mengetahui'
        )->orderBy(
            $this->table . 'id'
        );
    }
}