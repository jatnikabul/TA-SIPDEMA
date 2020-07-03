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
            $table->unsignedBigInteger('penduduk_id');
            $table->string('peruntukan_surat', 100);
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
        Schema::dropIfExists('surat_skcks');
    }
}
