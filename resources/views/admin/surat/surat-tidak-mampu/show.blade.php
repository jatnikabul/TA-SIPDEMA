@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Keterangan Tidak Mampu
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
            <li class="active">Surat Keterangan Tidak Mampu</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Surat Keterangan Tidak Mampu</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <dl class="dl-horizontal">
                <dt>No surat</dt>
                <dd>{{ $surat_tidak_mampu->no_surat }}</dd>
                <dt>Penduduk id</dt>
                <dd>{{ $surat_tidak_mampu->penduduk_id }}</dd>
                <dt>Peruntukan Surat</dt>
                <dd>{{ $surat_tidak_mampu->peruntukan_surat }}</dd>
                <dt>Tanggal</dt>
                <dd>{{ $surat_tidak_mampu->tanggal }}</dd>
                <dt>Keterangan</dt>
                <dd>{{ $surat_tidak_mampu->keterangan }}</dd>
                <dt>Pejabat Mengetahui</dt>
                <dd>{{ $surat_tidak_mampu->pejabat_mengetahui }}</dd>
            </dl>
            </div>
            <div class="box-footer">
                <a href="{{ route('admin.surat.surat-tidak-mampu.index') }}" type="button" class="btn btn-primary">Kembali</a>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>
@endsection
