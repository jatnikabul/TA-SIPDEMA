<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $fillable = ['no_surat', 'nama_pemohon', 'perihal', 'tanggal', 'keterangan',];

    public function sql()
    {
        return $this
        ->select(
            $this->table . '.no_surat',
            $this->table . '.nama_pemohon',
            $this->table . '.perihal',
            $this->table . '.tanggal',
            $this->table . '.keterangan'
        )->orderBy(
            $this->table . 'id'
        );
    }
}
