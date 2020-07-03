<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_usahas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_surat');
            $table->unsignedBigInteger('penduduk_id');
            $table->string('jenis_usaha');
            $table->string('nama_perusahaan');
            $table->string('keterangan')->nullable();
            $table->string('pejabat_mengetahui');
            $table->timestamps();

            $table->foreign('penduduk_id')->on()->references('id')->on('penduduk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_usahas');
    }
}
