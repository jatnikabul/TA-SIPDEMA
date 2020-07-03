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
        <div class="box box-success">
            <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Surat Pengantar SKCK</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <dl class="dl-horizontal">
                <dt>No Surat</dt>
                <dd>{{ $surat_kelahiran->no_surat }}</dd>
                <dt>Nama Anak</dt>
                <dd>{{ $surat_kelahiran->nama_anak }}</dd>
                <dt>Anak Ke</dt>
                <dd>{{ $surat_kelahiran->anak_ke }}</dd>
                <dt>Tempat Lahir</dt>
                <dd>{{ $surat_kelahiran->tempat_lahir }}</dd>
                <dt>Tanggal Lahir</dt>
                <dd>{{ $surat_kelahiran->tanggal_lahir }}</dd>
                <dt>Waktu Lahir</dt>
                <dd>{{ $surat_kelahiran->waktu_lahir }}</dd>
                <dt>Jenis Kelamin</dt>
                <dd><td>@if ($surat_kelahiran->jenis_kelamin=='L')
                    Laki-laki
                    @endif
                    @if ($surat_kelahiran->jenis_kelamin=='P')
                    Perempuan
                    @endif
                </td></dd>
                <dt>Agama</dt>
                <dd>{{ $surat_kelahiran->agama }}</dd>
                <dt>Nama Ibu Kandung</dt>
                <dd>{{ $surat_kelahiran->nama_ibu_kandung }}</dd>
                <dt>Nama Ayah Kandung</dt>
                <dd>{{ $surat_kelahiran->nama_ayah_kandung }}</dd>
                <dt>Alamat</dt>
                <dd>{{ $surat_kelahiran->alamat }}</dd>
                <dt>Pejabat Mengetahui</dt>
                <dd>{{ $surat_kelahiran->pejabat_mengetahui }}</dd>
            </dl>
            </div>
            <div class="box-footer">
                <a href="{{ route('admin.surat.surat-kelahiran.index') }}" type="button" class="btn btn-primary">Kembali</a>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>
@endsection
