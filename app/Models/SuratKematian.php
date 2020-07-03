<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKematian extends Model
{
    protected $fillable = ['no_surat', 'penduduk_id', 'hari', 
    'waktu', 'tanggal', 'meninggal_di', 'disebabkan_karena',
    'nama_yang_melaporkan', 'hubungan_dengan_yang_meninggal', 'pejabat_mengetahui',];
    
    public function sql()
    {
        return $this
        ->select(
            $this->table . '.no_surat',
            $this->table . '.penduduk_id',
            $this->table . '.hari',
            $this->table . '.waktu',
            $this->table . '.tanggal',
            $this->table . '.meninggal_di',
            $this->table . '.disebabkan_karena',
            $this->table . '.nama_yang_melaporkan',
            $this->table . '.hubungan_dengan_yang_meninggal',
            $this->table . '.pejabat_mengetahui'
            )->orderBy(
                $this->table . 'id'
            );
    }
        
    public function penduduk(){
        return $this->belongsTo('App\Models\Penduduk');
    }
}
