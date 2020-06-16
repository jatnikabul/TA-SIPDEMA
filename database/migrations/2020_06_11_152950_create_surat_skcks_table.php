<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratSkcksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_skcks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_surat');
            $table->string('penduduk_id');
            $table->string('nik');
            $table->string('pekerjaan');
            $table->string('peruntukan_surat', 100);
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
        Schema::dropIfExists('surat_skcks');
    }
}
