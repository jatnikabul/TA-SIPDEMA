<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKematian extends Model
{
    protected $fillable = ['no_surat', 
    'hari', 
    'waktu', 'tanggal', 'meninggal_di', 'nama_yang_meninggal', 'disebabkan_karena',
    'nama_yang_melaporkan', 'hubungan_dengan_yang_meninggal', 'pejabat_mengetahui',];
    
    public function sql()
    {
        return $this
        ->select(
            $this->table . '.no_surat',
            $this->table . '.hari',
            $this->table . '.waktu',
            $this->table . '.tanggal',
            $this->table . '.meninggal_di',
            $this->table . '.nama_yang_meninggal',
            $this->table . '.disebabkan_karena',
            $this->table . '.nama_yang_melaporkan',
            $this->table . '.hubungan_dengan_yang_meninggal',
            $this->table . '.pejabat_mengetahui'
        )->orderBy(
            $this->table . 'id'
        );
    }
}
