@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Masuk
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
            <li class="active">Surat Masuk</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Surat Masuk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <dl class="dl-horizontal">
                <dt>No surat</dt>
                <dd>{{ $surat_masuk->no_surat }}</dd>
                <dt>Nama Pemohon</dt>
                <dd>{{ $surat_masuk->nama_pemohon }}</dd>
                <dt>Perihal</dt>
                <dd>{{ $surat_masuk->perihal }}</dd>
                <dt>Tanggal</dt>
                <dd>{{ $surat_masuk->tanggal }}</dd>
                <dt>Keterangan</dt>
                <dd>{{ $surat_masuk->keterangan }}</dd>
            </dl>
            </div>
            <div class="box-footer">
                <a href="{{ route('admin.laporan.surat-masuk.index') }}" type="button" class="btn btn-primary">Kembali</a>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>