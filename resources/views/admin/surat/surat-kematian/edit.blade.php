@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Kematian
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    Admin
                </a>
            </li>
            <li>
            <a href="{{ route('admin.surat.surat-kematian.index') }}">
                Surat Kematian
                </a>
            </li>
            <li class="active">Ubah Surat Kematian</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Ubah Surat Kematian</h3>
            </div>
            <form method="POST" action="{{ route('admin.surat.surat-kematian.update',$surat_kematian->id) }}">
                @csrf
                @method('put')
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('no_surat') ? ' has-error' : ' ' }}">
                            <label class="control-label">No Surat</label>
                            <input type="number" class="form-control" name="no_surat" value="{{ $surat_kematian->no_surat }}"
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
                            <label class="control-label">Nama Yang Meninggal</label>
                            <select class="form-control" name="penduduk_id">
                                @foreach ($penduduks as $penduduk)
                                <option value="{{ $penduduk->id }}" {{ $penduduk->id == $surat_kematian->penduduk_id ? 'selected' : '' }}>{{ $penduduk->nama_lengkap }}</option>
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
                        <div class="form-group{{ $errors->has('hari') ? ' has-error' : '' }}">
                            <label class="control-label">Hari</label>
                            <input type="text" class="form-control" name="hari" value="{{ $surat_kematian->hari }}"
                            placeholder="">
                            @if ($errors->has('hari'))
                            <span class="help-block">
                                <strong>{!! $errors->first('hari') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('waktu') ? ' has-error' : '' }}">
                            <label class="control-label">Waktu</label>
                            <input type="text" class="form-control" name="waktu" value="{{ $surat_kematian->waktu }}"placeholder="">
                            @if ($errors->has('waktu'))
                            <span class="help-block">
                                <strong>{!! $errors->first('waktu') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
                            <label class="control-label">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal"
                                value="{{ $surat_kematian->tanggal }}"placeholder="">
                            @if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{!! $errors->first('tanggal') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('meninggal_di') ? ' has-error' : '' }}">
                            <label class="control-label">Meninggal Di</label>
                            <input type="text" class="form-control datepicker" id="meninggal_di" name="meninggal_di"
                                value="{{ $surat_kematian->meninggal_di }}"placeholder="">
                            @if ($errors->has('meninggal_di'))
                            <span class="help-block">
                                <strong>{!! $errors->first('meninggal_di') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('disebabkan_karena') ? ' has-error' : '' }}">
                            <label class="control-label">Disebabkan Karena</label>
                            <input type="text" class="form-control datepicker" id="disebabkan_karena"
                                name="disebabkan_karena" value="{{ $surat_kematian->disebabkan_karena }}"placeholder="">
                            @if ($errors->has('disebabkan_karena'))
                            <span class="help-block">
                                <strong>{!! $errors->first('disebabkan_karena') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('nama_yang_melaporkan') ? ' has-error' : '' }}">
                            <label class="control-label">Nama Yang Melaporkan</label>
                            <input type="text" class="form-control datepicker" id="nama_yang_melaporkan" name="nama_yang_melaporkan"
                                value="{{ $surat_kematian->nama_yang_melaporkan }}"placeholder="">
                            @if ($errors->has('nama_yang_melaporkan'))
                            <span class="help-block">
                                <strong>{!! $errors->first('nama_yang_melaporkan') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('hubungan_dengan_yang_meninggal') ? ' has-error' : '' }}">
                            <label class="control-label">Hubungan Dengan Yang Meninggal</label>
                            <input type="text" class="form-control datepicker" id="hubungan_dengan_yang_meninggal" name="hubungan_dengan_yang_meninggal"
                                value="{{ $surat_kematian->hubungan_dengan_yang_meninggal }}"placeholder="">
                            @if ($errors->has('hubungan_dengan_yang_meninggal'))
                            <span class="help-block">
                                <strong>{!! $errors->first('hubungan_dengan_yang_meninggal') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('pejabat_mengetahui') ? ' has-error' : '' }}">
                            <label class="control-label">Pejabat Mengetahui</label>
                            <input type="text" class="form-control datepicker" id="pejabat_mengetahui" name="pejabat_mengetahui"
                                value="{{ $surat_kematian->pejabat_mengetahui }}"placeholder="">
                            @if ($errors->has('pejabat_mengetahui'))
                            <span class="help-block">
                                <strong>{!! $errors->first('pejabat_mengetahui') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                <div class="box-footer">
                    <a href="{{ route('admin.surat.surat-kematian.index') }}" type="button" class="btn btn-default">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <!-- /.box -->
    </section>
</div>
@endsection