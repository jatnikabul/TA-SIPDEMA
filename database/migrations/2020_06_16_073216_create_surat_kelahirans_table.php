<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratKelahiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_kelahirans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_surat');
            $table->string('nama_anak', 100);
            $table->string('tempat_lahir', 100);
            $table->string('hari', 100);
            $table->date('tanggal_lahir');
            $table->string('waktu_lahir');
            $table->string('jenis_kelamin');
            $table->string('anak_ke');
            $table->string('agama');
            $table->string('nama_ibu', 100);
            $table->string('nama_ayah', 100);
            $table->string('alamat');
            $table->string('pejabat_mengetahui');
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
        Schema::dropIfExists('surat_kelahirans');
    }
}
