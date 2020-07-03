<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = ['no_surat', 'penduduk_id', 'nama', 'alamat', 'tanggal',  'jenis_surat',];

    public function sql()
    {
        return $this
        ->select(
            $this->table . '.no_surat',
            $this->table . '.penduduk_id',
            $this->table . '.nama',
            $this->table . '.alamat',
            $this->table . '.tanggal',
            $this->table . '.jenis_surat'
            )->orderBy(
                $this->table . 'id'
            );
    }
}
