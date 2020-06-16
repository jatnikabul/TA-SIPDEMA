@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Masuk
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    Admin
                </a>
            </li>
            <li>
            <a href="{{ route('admin.laporan.surat-masuk.index') }}">
                Surat SKCK
                </a>
            </li>
            <li class="active">Ubah Surat Masuk</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Ubah Surat Masuk</h3>
            </div>
            <form method="POST" action="{{ route('admin.laporan.surat-masuk.update',$surat_masuk->id) }}">
                @csrf
                @method('put')
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('no_surat') ? ' has-error' : ' ' }}">
                            <label class="control-label">No Surat</label>
                            <input type="number" class="form-control" name="no_surat" value="{{ $surat_masuk->no_surat }}"
                            placeholder="">
                            @if ($errors->has('no_surat'))
                            <span class="help-block">
                                <strong>{!! $errors->first('no_surat') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('nama_pemohon') ? ' has-error' : '' }}">
                            <label class="control-label">Nama Pemohon</label>
                            <input type="text" class="form-control" name="nama_pemohon" value="{{ $surat_masuk->nama_pemohon }}"
                            placeholder="">
                            @if ($errors->has('nama_pemohon'))
                            <span class="help-block">
                                <strong>{!! $errors->first('nama_pemohon') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('perihal') ? ' has-error' : '' }}">
                            <label class="control-label">Perihal</label>
                            <input type="text" class="form-control" name="nik" value="{{ $surat_masuk->perihal }}"placeholder="">
                            @if ($errors->has('perihal'))
                            <span class="help-block">
                                <strong>{!! $errors->first('perihal') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
                            <label class="control-label">Tanggal</label>
                            <input type="text" class="form-control" name="tanggal"
                                value="{{ $surat_masuk->tanggal }}"placeholder="">
                            @if ($errors->has('tanggal')
                            <span class="help-block">
                                <strong>{!! $errors->first('tanggal') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                            <label class="control-label">Keterangan</label>
                            <input type="text" class="form-control datepicker" id="keterangan" name="keterangan"
                                value="{{ $surat_masuk->keterangan }}"placeholder="">
                            @if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{!! $errors->first('keterangan') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                <div class="box-footer">
                    <a href="{{ route('admin.laporan.surat-masuk.index') }}" type="button" class="btn btn-default">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <!-- /.box -->
    </section>
</div>
@endsection