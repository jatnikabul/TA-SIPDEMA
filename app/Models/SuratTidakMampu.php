<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratTidakMampu extends Model
{
    protected $fillable = ['no_surat', 'penduduk_id', 'tanggal', 'keterangan', 'pejabat_mengetahui',];

    public function sql()
    {
        return $this
        ->select(
            $this->table . '.no_surat',
            $this->table . '.penduduk_id',
            $this->table . '.tanggal',
            $this->table . '.keterangan',
            $this->table . '.pejabat_mengetahui'
            )->orderBy(
                $this->table . 'id'
            );
    }
        
    public function penduduk(){
        return $this->belongsTo('App\Models\Penduduk');
    }
}
