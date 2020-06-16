<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    public $table='penduduk';

    protected $fillable = ['nik', 'no_kk', 'nama_lengkap', 'nama_panggilan', 'jenis_kelamin', 'tempat_lahir', 'tanggal-lahir', 'agama', 'pekerjaan', 'kedudukan_dalam_keluarga', 'keterangan', 'dapat_membaca', 'alamat_lengkap', 'alamat_email', 'nomor_handphone_1', 'nomor_handphone_2', 'status', 'pendidikan_terakhir', 'nik_ibu', 'nama_ibu', 'nik_ayah', 'nama_ayah',];
    
    public function sql()
    {
        return $this
        ->select(
            $this->table . '.id',
            $this->table . '.nik',
            $this->table . '.no_kk',
            $this->table . '.nama_lengkap',
            $this->table . '.nama_penggilan',
            $this->table . '.jenis_kelamin',
            $this->table . '.tempat_lahir',
            $this->table . '.tanggal_lahir',
            $this->table . '.agama',
            $this->table . '.pekerjaan',
            $this->table . '.kedudukan_dalam-keluarga',
            $this->table . '.keterangan',
            $this->table . '.dapat_membaca',
            $this->table . '.alamat_lengkap',
            $this->table . '.alamat_email',
            $this->table . '.nomor_handphone_1',
            $this->table . '.nomor_handphone_2',
            $this->table . '.status',
            $this->table . '.pendidikan_terakhir',
            $this->table . '.nik_ibu',
            $this->table . '.nama_ibu',
            $this->table . '.nik_ayah',
            $this->table . '.nama_ayah'
        )->orderBy(
            $this->table . 'id'
        );
    }
}
