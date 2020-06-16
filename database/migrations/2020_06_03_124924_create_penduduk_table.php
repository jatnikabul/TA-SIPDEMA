<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik');
            $table->string('no_kk');
            $table->string('nama_lengkap', 100);
            $table->string('nama_panggilan', 30)->nullable();
            $table->string('tempat_lahir',30);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->enum('agama', ['-','Islam', 'Kristen', 'Budha', 'Konghucu', 'Hindu']);
            $table->enum('pekerjaan', ['-', 'Belum-/-Tidak-bekerja', 'Buruh', 'Pelajar-/-Mahasiswa', 'Pegawai-Negeri-Sipil', 'Pensiunan', 
                            'Tentara-Nasional-Indonesia', 'Kepolisian-RI', 'Karyawan-BUMN', 'Karyawan-Honorer', 'Karyawan-Swasta', 
                            'Wirusaha', 'dan-lain-lain']);
            $table->string('kedudukan_dalam_keluarga');
            $table->string('keterangan');
            $table->string('dapat_membaca');
            $table->text('alamat_lengkap');
            $table->text('alamat_email');
            $table->string('nomor_handphone_1');
            $table->string('nomor_handphone_2');
            $table->enum('status', ['-','Sudah-Menikah', 'Belum-Menikah']);
            $table->enum('pendidikan_terakhir', ['-', 'SD', 'SMP', 'SMA', 'SMK', 'UNIVERSITAS']);
            $table->string('nik_ibu');
            $table->string('nama_ibu',100);
            $table->string('nik_ayah');
            $table->string('nama_ayah',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
}
