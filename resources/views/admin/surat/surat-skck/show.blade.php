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
                <dd>{{ $surat_skck->no_surat }}</dd>
                <dt>Penduduk id</dt>
                <dd>{{ $surat_skck->penduduk_id }}</dd>
                <dt>NIK</dt>
                <dd>{{ $surat_skck->nik }}</dd>
                <dt>Pekerjaan</dt>
                <dd>{{ $surat_skck->pekerjaan }}</dd>
                <dt>Peruntukan Surat</dt>
                <dd>{{ $surat_skck->peruntukan_surat }}</dd>
                <dt>Keterangan</dt>
                <dd>{{ $surat_skck->keterangan }}</dd>
                <dt>Pejabat Mengetahui</dt>
                <dd>{{ $surat_skck->pejabat_mengetahui }}</dd>
            </dl>
            </div>
            <div class="box-footer">
                <a href="{{ route('admin.surat.surat-skck.index') }}" type="button" class="btn btn-primary">Kembali</a>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>
@endsection
