@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Keterangan Kelahiran 
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    Admin
                </a>
            </li>
            <li>
            <a href="{{ route('admin.register.index') }}">
                Surat Keterangan Kelahiran
                </a>
            </li>
            <li class="active">Ubah Keterangan Kelahiran</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Ubah Surat Keterangan Kelahiran</h3>
            </div>
            <form method="POST" action="{{ route('admin.register.update',$register->id) }}">
                @csrf
                @method('put')
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('no_surat') ? ' has-error' : ' ' }}">
                            <label class="control-label">No Surat</label>
                                <input type="number" class="form-control" name="no_surat" value="{{ $register->no_surat }}"
                                placeholder="">
                            @if ($errors->has('no_surat'))
                            <span class="help-block">
                                <strong>{!! $errors->first('no_surat') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('penduduk_id') ? ' has-error' : ' ' }}">
                                <label class="control-label">Penduduk</label>
                                <input type="number" class="form-control" name="penduduk_id" value="{{ $register->penduduk_id }}"
                                    placeholder="">
                                @if ($errors->has('penduduk_id'))
                                <span class="help-block">
                                    <strong>{!! $errors->first('penduduk_id') !!}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
                            <label class="control-label">Tanggal</label>
                            <input type="text" class="form-control" name="tanggal"
                                value="{{ $register->tanggal }}" placeholder="">
                            @if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{!! $errors->first('tanggal') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label class="control-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                value="{{ $register->nama }}" placeholder="">
                            @if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{!! $errors->first('nama') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label class="control-label">Penghasilan</label>
                            <input type="text" class="form-control datepicker" id="alamat" name="alamat"
                                value="{{ $register->alamat }}" placeholder="">
                            @if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{!! $errors->first('alamat') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label class="control-label">Alamat</label>
                            <input type="text" class="form-control datepicker" id="alamat" name="alamat"
                                value="{{ $register->alamat }}" placeholder="">
                            @if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{!! $errors->first('alamat') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('jenis_surat') ? ' has-error' : '' }}">
                            <label class="control-label">Jenis Surat</label>
                            <input type="text" class="form-control datepicker" id="jenis_surat" name="jenis_surat"
                                value="{{ $register->jenis_surat }}" placeholder="">
                            @if ($errors->has('jenis_surat'))
                            <span class="help-block">
                                <strong>{!! $errors->first('jenis_surat') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{ route('admin.register.index') }}" type="button"
                        class="btn btn-default">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <!-- /.box -->
    </section>
</div>
@endsection