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
                <dd>{{ $register->no_surat }}</dd>
                <dt>Penduduk</dt>
                <dd>{{ $register->penduduk_id }}</dd>
                <dt>Nama</dt>
                <dd>{{ $$register->nama }}</dd>
                <dt>Alamat</dt>
                <dd>{{ $$register->alamat }}</dd>
                <dt>Tanggal</dt>
                <dd>{{ $register->tanggal }}</dd>
                <dt>Jenis Surat</dt>
                <dd>{{ $register->jenis_surat }}</dd>
            </dl>
            </div>
            <div class="box-footer">
                <a href="{{ route('admin.register.index') }}" type="button" class="btn btn-primary">Kembali</a>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
</div>
@endsection
