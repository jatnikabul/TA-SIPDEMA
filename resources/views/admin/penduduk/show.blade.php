@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa"></i></a></li>
            <li class="active"></li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Data Penduduk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <dl class="dl-horizontal">
                <dt>NIK</dt>
                <dd>{{ $penduduk->nik }}</dd>
                <dt>No KK</dt>
                <dd>{{ $penduduk->no_kk }}</dd>
                <dt>Nama Lengkap</dt>
                <dd>{{ $penduduk->nama_lengkap }}</dd>
                <dt>Nama Panggilan</dt>
                <dd>{{ $penduduk->nama_panggilan }}</dd>
                <dt>Tempat Lahir</dt>
                <dd>{{ $penduduk->tempat_lahir }}</dd>
                <dt>Tanggal Lahir</dt>
                <dd>{{ $penduduk->tanggal_lahir }}</dd>
                <dt>Jenis Kelamin</dt>
                <dd>@if ($penduduk->jenis_kelamin=='L')
                    Laki-laki
                    @endif
                    @if ($penduduk->jenis_kelamin=='P')
                    Perempuan
                    @endif
                </dd>
                <dt>Agama</dt>
                <dd>{{ $penduduk->agama }}</dd>
                <dt>Pekerjaan</dt>
                <dd>{{ $penduduk->pekerjaan }}</dd>
                <dt>Kedudukan dalam keluarga</dt>
                <dd>{{ $penduduk->kedudukan_dalam_keluarga }}</dd>
                <dt>Keterangan</dt>
                <dd>{{ $penduduk->keterangan }}</dd>
                <dt>Dapat membaca</dt>
                <dd>{{ $penduduk->dapat_membaca }}</dd>
                <dt>Alamat lengkap</dt>
                <dd>{{ $penduduk->alamat_lengkap }}</dd>
                <dt>Alamat email</dt>
                <dd>{{ $penduduk->alamat_email }}</dd>
                <dt>Nomor handphone 1</dt>
                <dd>{{ $penduduk->nomor_handphone_1 }}</dd>
                <dt>Nomor handphone 2</dt>
                <dd>{{ $penduduk->nomor_handphone_2 }}</dd>
                <dt>Status</dt>
                <dd>{{ $penduduk->status }}</dd>
                <dt>Pendidikan terakhir</dt>
                <dd>{{ $penduduk->pendidikan_terakhir }}</dd>
                <dt>NIK ibu</dt>
                <dd>{{ $penduduk->nik_ibu }}</dd>
                <dt>Nama ibu</dt>
                <dd>{{ $penduduk->nama_ibu }}</dd>
                <dt>NIK ayah</dt>
                <dd>{{ $penduduk->nik_ayah }}</dd>
                <dt>Nama ayah</dt>
                <dd>{{ $penduduk->nama_ayah }}</dd>
            </dl>
            </div>
            <div class="box-footer">
                <a href="{{ route('admin.penduduk.index') }}" type="button" class="btn btn-primary">Kembali</a>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>
@endsection
