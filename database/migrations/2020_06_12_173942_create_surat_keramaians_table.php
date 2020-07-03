<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratKeramaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keramaians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_surat');
            $table->unsignedBigInteger('penduduk_id');
            $table->string('acara');
            $table->string('jenis_hiburan');
            $table->string('waktu');
            $table->string('tempat');
            $table->string('hari');
            $table->string('tanggal');
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
        Schema::dropIfExists('surat_keramaians');
    }
}
