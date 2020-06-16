@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Keterangan Usaha
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
            <li class="active">Surat Keterangan Usaha</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Surat Keterangan Usaha</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <dl class="dl-horizontal">
                <dt>No surat</dt>
                <dd>{{ $surat_usaha->no_surat }}</dd>
                <dt>Penduduk id</dt>
                <dd>{{ $surat_usaha->penduduk_id }}</dd>
                <dt>Jenis Usaha</dt>
                <dd>{{ $surat_usaha->jenis_usaha }}</dd>
                <dt>Nama Perusahaan</dt>
                <dd>{{ $surat_usaha->nama_perusahaan }}</dd>
                <dt>Penghasilan</dt>
                <dd>{{ $surat_usaha->penghasilan }}</dd>
                <dt>Keterangan</dt>
                <dd>{{ $surat_usaha->keterangan }}</dd>
                <dt>Pejabat Mengetahui</dt>
                <dd>{{ $surat_usaha->pejabat_mengetahui }}</dd>
            </dl>
            </div>
            <div class="box-footer">
                <a href="{{ route('admin.surat.surat-usaha.index') }}" type="button" class="btn btn-primary">Kembali</a>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>
@endsection
