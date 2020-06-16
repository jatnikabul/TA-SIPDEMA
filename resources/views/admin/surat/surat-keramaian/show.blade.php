@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Pengantar SKCK
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
            <li class="active">Surat Pengantar SKCK</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Surat Pengantar SKCK</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <dl class="dl-horizontal">
                <dt>No surat</dt>
                <dd>{{ $surat_keramaian->no_surat }}</dd>
                <dt>Penduduk id</dt>
                <dd>{{ $surat_keramaian->penduduk_id }}</dd>
                <dt>Acara</dt>
                <dd>{{ $surat_keramaian->acara }}</dd>
                <dt>Jenis Hiburan</dt>
                <dd>{{ $surat_keramaian->jenis_hiburan }}</dd>
                <dt>Waktu</dt>
                <dd>{{ $surat_keramaian->waktu }}</dd>
                <dt>Tempat</dt>
                <dd>{{ $surat_keramaian->tempat }}</dd>
                <dt>Tanggal</dt>
                <dd>{{ $surat_keramaian->tanggal }}</dd>
                <dt>Keterangan</dt>
                <dd>{{ $surat_keramaian->keterangan }}</dd>
                <dt>Pejabat Mengetahui</dt>
                <dd>{{ $surat_keramaian->pejabat_mengetahui }}</dd>
            </dl>
            </div>
            <div class="box-footer">
                <a href="{{ route('admin.surat.surat-keramaian.index') }}" type="button" class="btn btn-primary">Kembali</a>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>
@endsection
