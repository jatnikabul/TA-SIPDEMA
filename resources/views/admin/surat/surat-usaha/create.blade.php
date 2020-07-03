@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Keterangan Usaha
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    Admin
                </a>
            </li>
            <li>
                <a href="{{ route('admin.surat.surat-usaha.index') }}">
                    Surat Keterangan Usaha
                </a>
            </li>
            <li class="active">Tambah Surat Keterangan Usaha</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Surat Keterangan Usaha</h3>
            </div>
            <form method="POST" action="{{ route('admin.surat.surat-usaha.store') }}">
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
                            <label class="control-label">Penduduk id</label>
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
                        <div class="form-group{{ $errors->has('jenis_usaha') ? ' has-error' : '' }}">
                            <label class="control-label">Jenis Usaha</label>
                            <input type="text" class="form-control" name="jenis_usaha"
                                value="{!! old('jenis_usaha') !!}" placeholder="">
                            @if ($errors->has('jenis_usaha'))
                            <span class="help-block">
                                <strong>{!! $errors->first('jenis_usaha') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('nama_perusahaan') ? ' has-error' : '' }}">
                            <label class="control-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                value="{!! old('nama_perusahaan') !!}" placeholder="">
                            @if ($errors->has('nama_perusahaan'))
                            <span class="help-block">
                                <strong>{!! $errors->first('nama_perusahaan') !!}</strong>
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
                            <input type="text" class="form-control datepicker" id="pejabat_mengetahui"
                                name="pejabat_mengetahui" value="{!! old('pejabat_mengetahui') !!}" placeholder="">
                            @if ($errors->has('pejabat_mengetahui'))
                            <span class="help-block">
                                <strong>{!! $errors->first('pejabat_mengetahui') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{ route('admin.surat.surat-usaha.index') }}" type="button"
                        class="btn btn-default">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <!-- /.box -->
    </section>
</div>
@endsection