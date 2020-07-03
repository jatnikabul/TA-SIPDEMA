<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratKematiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_kematians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_surat');
            $table->unsignedBigInteger('penduduk_id');
            $table->string('hari', 50);
            $table->string('waktu');
            $table->date('tanggal');
            $table->string('meninggal_di', 100);
            $table->string('disebabkan_karena', 100);
            $table->string('nama_yang_melaporkan', 100);
            $table->string('hubungan_dengan_yang_meninggal', 100);
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
        Schema::dropIfExists('surat_kematians');
    }
}
