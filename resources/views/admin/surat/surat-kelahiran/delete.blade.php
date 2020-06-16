@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Ketrangan Kelahiran
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
            <li class="active">Surat Skck</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Delete Surat Ketrangan Kelahiran</h3>
            </div>
            <form method="POST" action="{{ route('admin.surat.surat-kelahiran.destroy', $surat_kelahiran->id) }}">
                @csrf
        </div class="box-body">
        <div class="row">
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
                    <div class="form-group{{ $errors->has('nama_anak') ? ' has-error' : '' }}">
                        <label class="control-label">Nama Anak</label>
                        <input type="text" class="form-control" name="nama_anak" value="{!! old('nama_anak') !!}"
                            placeholder="">
                        @if ($errors->has('nama_anak'))
                        <span class="help-block">
                            <strong>{!! $errors->first('nama_anak') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('anak_ke') ? ' has-error' : '' }}">
                        <label class="control-label">Anak Ke</label>
                        <input type="text" class="form-control" name="anak_ke"
                            value="{!! old('anak_ke') !!}" placeholder="">
                        @if ($errors->has('anak_ke'))
                        <span class="help-block">
                            <strong>{!! $errors->first('anak_ke') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                        <label class="control-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                            value="{!! old('tempat_lahir') !!}" placeholder="">
                        @if ($errors->has('tempat_lahir'))
                        <span class="help-block">
                            <strong>{!! $errors->first('tempat_lahir') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('hari') ? ' has-error' : '' }}">
                        <label class="control-label">Harit</label>
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
                    <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                        <label class="control-label">Tanggal Lahir</label>
                        <input type="text" class="form-control datepicker" id="tanggal_lahir" name="tanggal_lahir"
                            value="{!! old('tanggal_lahir') !!}" placeholder="">
                        @if ($errors->has('tanggal_lahir'))
                        <span class="help-block">
                            <strong>{!! $errors->first('tanggal_lahir') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('waktu_lahir') ? ' has-error' : '' }}">
                        <label class="control-label">Waktu Lahir</label>
                        <input type="text" class="form-control datepicker" id="waktu_lahir" name="waktu_lahir"
                            value="{!! old('waktu_lahir') !!}" placeholder="">
                        @if ($errors->has('waktu_lahir'))
                        <span class="help-block">
                            <strong>{!! $errors->first('waktu_lahir') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                        <label class="control-label">Jenis Kelamin</label>
                        <input type="text" class="form-control datepicker" id="jenis_kelamin" name="jenis_kelamin"
                            value="{!! old('jenis_kelamin') !!}" placeholder="">
                        @if ($errors->has('jenis_kelamin'))
                        <span class="help-block">
                            <strong>{!! $errors->first('jenis_kelamin') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
                        <label class="control-label">Agama</label>
                        <input type="text" class="form-control datepicker" id="agama" name="agama"
                            value="{!! old('agama') !!}" placeholder="">
                        @if ($errors->has('agama'))
                        <span class="help-block">
                            <strong>{!! $errors->first('agama') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('nama_ibu') ? ' has-error' : '' }}">
                        <label class="control-label">Nama Ibu</label>
                        <input type="text" class="form-control datepicker" id="nama_ibu" name="nama_ibu"
                            value="{!! old('nama_ibu') !!}" placeholder="">
                        @if ($errors->has('nama_ibu'))
                        <span class="help-block">
                            <strong>{!! $errors->first('nama_ibu') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('nama_ayah') ? ' has-error' : '' }}">
                        <label class="control-label">Nama Ayah</label>
                        <input type="text" class="form-control datepicker" id="nama_ayah" name="nama_ayah"
                            value="{!! old('nama_ayah') !!}" placeholder="">
                        @if ($errors->has('nama_ayah'))
                        <span class="help-block">
                            <strong>{!! $errors->first('nama_ayah') !!}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                        <label class="control-label">Alamat</label>
                        <input type="text" class="form-control datepicker" id="alamat" name="alamat"
                            value="{!! old('alamat') !!}" placeholder="">
                        @if ($errors->has('alamat'))
                        <span class="help-block">
                            <strong>{!! $errors->first('alamat') !!}</strong>
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
                    <a href="{{ route('admin.surat.surat-kelahiran.index') }}" type="button" class="btn btn-default">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <!-- /.box -->
    </section>
</div>
@endsection