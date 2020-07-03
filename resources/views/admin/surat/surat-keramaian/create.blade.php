@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Ijin Keramaian
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    Admin
                </a>
            </li>
            <li>
            <a href="{{ route('admin.surat.surat-keramaian.index') }}">
                    Surat Ijin Keramaian
                </a>
            </li>
            <li class="active">Tambah Surat Ijin Keramaian</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Surat Ijin Keramaian</h3>
            </div>
            <form method="POST" action="{{ route('admin.surat.surat-keramaian.store') }}">
                @csrf
                @method('POST')
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('no_surat') ? ' has-error' : ' ' }}">
                            <label class="control-label">No Surat</label>
                            <input type="number" class="form-control" name="no_surat" value="{!! old('no_surat') !!}"
                                placeholder="">
                            @if ($errors->has('no_surat'))
                            <span class="help-block">
                                <strong>{!! $errors->first('no_surat') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('penduduk_id') ? ' has-error' : '' }}">
                            <label class="control-label">Penduduk</label>
                            <select class="form-control" name="penduduk_id">
                                @foreach ($penduduks as $penduduk)
                                    <option value="{{ $penduduk->id }}">{{ $penduduk->nama_lengkap }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('penduduk_id'))
                            <span class="help-block">
                                <strong>{!! $errors->first('penduduk_id') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('acara') ? ' has-error' : '' }}">
                            <label class="control-label">Acara </label>
                            <input type="text" class="form-control" name="acara"
                                value="{!! old('acara') !!}" placeholder="">
                            @if ($errors->has('acara'))
                            <span class="help-block">
                                <strong>{!! $errors->first('acara') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('jenis_hiburan') ? ' has-error' : '' }}">
                            <label class="control-label">Jenis Hiburan</label>
                            <input type="text" class="form-control" id="jenis_hiburan" name="jenis_hiburan"
                                value="{!! old('jenis_hiburan') !!}" placeholder="">
                            @if ($errors->has('jenis_hiburan'))
                            <span class="help-block">
                                <strong>{!! $errors->first('jenis_hiburan') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('waktu') ? ' has-error' : '' }}">
                            <label class="control-label">Waktu</label>
                            <input type="time" class="form-control datepicker" id="waktu" name="waktu"
                                value="{!! old('waktu') !!}" placeholder="">
                            @if ($errors->has('waktu'))
                            <span class="help-block">
                                <strong>{!! $errors->first('waktu') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('tempat') ? ' has-error' : '' }}">
                            <label class="control-label">Tempat</label>
                            <input type="text" class="form-control datepicker" id="tempat" name="tempat"
                                value="{!! old('tempat') !!}" placeholder="">
                            @if ($errors->has('tempat'))
                            <span class="help-block">
                                <strong>{!! $errors->first('tempat') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('hari') ? ' has-error' : '' }}">
                            <label class="control-label">Hari</label>
                            <input type="text" class="form-control datepicker" id="hari" name="hari"
                                value="{!! old('hari') !!}" placeholder="">
                            @if ($errors->has('hari'))
                            <span class="help-block">
                                <strong>{!! $errors->first('hari') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
                            <label class="control-label">Tanggal</label>
                            <input type="date" class="form-control datepicker" id="tanggal" name="tanggal"
                                value="{!! old('tanggal') !!}" placeholder="">
                            @if ($errors->has('tanggal'))
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
                                value="{!! old('keterangan') !!}" placeholder="">
                            @if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{!! $errors->first('keterangan') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('pejabat_mengetahui') ? ' has-error' : '' }}">
                            <label class="control-label">Pejabat Mengetahui</label>
                            <input type="text" class="form-control datepicker" id="pejabat_mengetahui" name="pejabat_mengetahui"
                                value="{!! old('pejabat_mengetahui') !!}" placeholder="">
                            @if ($errors->has('pejabat_mengetahui'))
                            <span class="help-block">
                                <strong>{!! $errors->first('pejabat_mengetahui') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                <div class="box-footer">
                    <a href="{{ route('admin.surat.surat-keramaian.index') }}" type="button" class="btn btn-default">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <!-- /.box -->
    </section>
</div>
@endsection