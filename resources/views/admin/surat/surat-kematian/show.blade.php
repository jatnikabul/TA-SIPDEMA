@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Keterangan Kematian
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
            <li class="active">Surat Kematian</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Surat Kematian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <dl class="dl-horizontal">
                <dt>No surat</dt>
                <dd>{{ $surat_kematian->no_surat }}</dd>
                <dt>Nama Yang Meninggal</dt>
                <dd>{{ $surat_kematian->penduduk->nama_lengkap}}</dd>
                <dt>Hari</dt>
                <dd>{{ $surat_kematian->hari }}</dd>
                <dt>Waktu</dt>
                <dd>{{ $surat_kematian->waktu }}</dd>
                <dt>Tanggal</dt>
                <dd>{{ $surat_kematian->tanggal }}</dd>
                <dt>Meninggal Di</dt>
                <dd>{{ $surat_kematian->meninggal_di }}</dd>
                <dt>Disebabkan Karena</dt>
                <dd>{{ $surat_kematian->disebabkan_karena }}</dd>
                <dt>Nama Yang Melaporkan</dt>
                <dd>{{ $surat_kematian->nama_yang_melaporkan }}</dd>
                <dt>Hubungan Dengan Yang Meninggal</dt>
                <dd>{{ $surat_kematian->hubungan_dengan_yang_meninggal }}</dd>
                <dt>Pejabat Mengetahui</dt>
                <dd>{{ $surat_kematian->pejabat_mengetahui }}</dd>
            </dl>
            </div>
            <div class="box-footer">
                <a href="{{ route('admin.surat.surat-kematian.index') }}" type="button" class="btn btn-primary">Kembali</a>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>
@endsection
