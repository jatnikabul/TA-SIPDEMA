<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratTidakMampusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_tidak_mampus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_surat');
            $table->string('penduduk_id');
            $table->string('peruntukan_surat');
            $table->string('tanggal');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('surat_tidak_mampus');
    }
}
