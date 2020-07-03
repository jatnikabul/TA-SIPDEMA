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
            <a href="{{ route('admin.surat.surat-kelahiran.index') }}">
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
            <form method="POST" action="{{ route('admin.surat.surat-kelahiran.update',$surat_kelahiran->id) }}">
                @csrf
                @method('put')
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('no_surat') ? ' has-error' : ' ' }}">
                            <label class="control-label">No Surat</label>
                            <input type="number" class="form-control" id="no_surat" name="no_surat" value="{{ $surat_kelahiran->no_surat }}"
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
                            <input type="text" class="form-control" id="nama_anak" name="nama_anak" value="{{ $surat_kelahiran->nama_anak }}"
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
                            <input type="text" class="form-control" id="anak_ke" name="anak_ke" 
                            value="{{ $surat_kelahiran->anak_ke }}"placeholder="">
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
                            value="{{ $surat_kelahiran->tempat_lahir }}"placeholder="">
                            @if ($errors->has('tempat_lahir'))
                            <span class="help-block">
                                <strong>{!! $errors->first('tempat_lahir') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                            <label class="control-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal-lahir" name="tanggal_lahir" 
                            value="{{ $surat_kelahiran->tanggal_lahir }}"placeholder="">
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
                            <input type="time" class="form-control datepicker" id="waktu_lahir" name="waktu_lahir"
                                value="{{ $surat_kelahiran->waktu_lahir }}"placeholder="">
                            @if ($errors->has('waktu_lahir'))
                            <span class="help-block">
                                <strong>{!! $errors->first('waktu_lahir') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Jenis Kelamin</label>
                        <div class="form-group">
                            <select class="form-control" required name="jenis_kelamin">
                                <option value="-">Pilih Jenis Kelamin</option>
                                <option value="L" @if ($surat_kelahiran->jenis_kelamin=='L') selected @endif>Laki-Laki</option>
                                <option value="P" @if ($surat_kelahiran->jenis_kelamin=='P') selected @endif>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
                            <label class="control-label">Agama</label>
                            <input type="text" class="form-control datepicker" id="agama" name="agama"
                                value="{{ $surat_kelahiran->agama }}"placeholder="">
                            @if ($errors->has('agama'))
                            <span class="help-block">
                                <strong>{!! $errors->first('agama') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('nama_ibu_kandung') ? ' has-error' : '' }}">
                            <label class="control-label">Nama Ibu Kandung</label>
                            <input type="text" class="form-control datepicker" id="nama_ibu_kandung" name="nama_ibu_kandung"
                                value="{{ $surat_kelahiran->nama_ibu_kandung }}"placeholder="">
                            @if ($errors->has('nama_ibu_kandung'))
                            <span class="help-block">
                                <strong>{!! $errors->first('nama_ibu_kandung') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('nama_ayah_kandung') ? ' has-error' : '' }}">
                            <label class="control-label">Nama Ayah Kandung</label>
                            <input type="text" class="form-control datepicker" id="nama_ayah_kandung" name="nama_ayah_kandung"
                                value="{{ $surat_kelahiran->nama_ayah_kandung }}"placeholder="">
                            @if ($errors->has('nama_ayah_kandung'))
                            <span class="help-block">
                                <strong>{!! $errors->first('nama_ayah_kandung') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label class="control-label">Alamat</label>
                            <input type="text" class="form-control datepicker" id="alamat" name="alamat"
                                value="{{ $surat_kelahiran->alamat }}"placeholder="">
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
                                value="{{ $surat_kelahiran->pejabat_mengetahui }}"placeholder="">
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