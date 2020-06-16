
@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Penduduk
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
            <li class="active">Penduduk</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Penduduk</h3>
            </div>
            <form method="POST" action="{{ route('admin.penduduk.destroy', $penduduk->id) }}">
                @csrf
        </div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('nik') ? ' has-error' : ' ' }}">
                    <label class="control-label">NIK</label>
                    <input type="number" class="form-control" name="nik" value="{!! old('nik') !!}" placeholder="">
                    @if ($errors->has('nik'))
                    <span class="help-block">
                        <strong>{!! $errors->first('nik') !!}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('no_kk') ? ' has-error' : '' }}">
                    <label class="control-label">NO KK</label>
                    <input type="number" class="form-control" name="no_kk" value="{!! old('no_kk') !!}" placeholder="">
                    @if ($errors->has('no_kk'))
                    <span class="help-block">
                        <strong>{!! $errors->first('no_kk') !!}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                    <label class="control-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" value="{!! old('nama_lengkap') !!}"
                        placeholder="">
                    @if ($errors->has('nama_lengkap'))
                    <span class="help-block">
                        <strong>{!! $errors->first('nama_lengkap') !!}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('nama_panggilan') ? ' has-error' : '' }}">
                    <label class="control-label">Nama Panggailan</label>
                    <input type="text" class="form-control" name="nama_panggilan" value="{!! old('nama_panggilan') !!}"
                        placeholder="">
                    @if ($errors->has('nama_panggilan'))
                    <span class="help-block">
                        <strong>{!! $errors->first('nama_panggilan') !!}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <label class="control-label">Jenis Kelamin</label>
                <div class="form-group">
                    <select class="form-control" required name="jenis_kelamin">
                        <option value="">Pilih disini</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                    <label class="control-label">Tempat Lahir</label>
                    <input type="text" class="form-control datepicker" id="tempat_lahir" name="tempat_lahir"
                        name="tempat_lahir" value="{!! old('tempat_lahir') !!}" placeholder="">
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
                    <input type="date" class="form-control datepicker" id="tanggal_lahir" name="tanggal_lahir"
                        value="{!! old('tanggal_lahir') !!}" placeholder="">
                    @if ($errors->has('tanggal_lahir'))
                    <span class="help-block">
                        <strong>{!! $errors->first('tanggal_lahir') !!}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Agama</label>
                    <select class="form-control" required name="agama">
                        <option value="">Pilih disini</option>
                        <option value="islam">Islam</option>
                        <option value="Budha">Budha</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Khatolik">Katholik</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Pekerjaan</label>
                    <select class="form-control" required name="pekerjaan">
                        <option value="">Pilih disini</option>
                        <option value="islam">Wirausaha</option>
                        <option value="Budha">Pelajar</option>
                        <option value="Kristen">Buruh</option>
                        <option value="Khatolik">Katholik</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('kedudukan_dalam_keluarga') ? ' has-error' : '' }}">
                <label class="control-label">Kedudukan Dalam Keluarga</label>
                <input type="text" class="form-control datepicker" id="kedudukan-dalam-keluarga"
                    name="kedudukan_dalam_keluarga" value="{!! old('kedudukan_dalam_keluarga') !!}" placeholder="">
                @if ($errors->has('kedudukan_dalam_keluarga'))
                <span class="help-block">
                    <strong>{!! $errors->first('kedudukan_dalam_keluarga') !!}</strong>
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
            <div class="form-group{{ $errors->has('dapat_membaca') ? ' has-error' : '' }}">
                <label class="control-label">Dapat Membaca</label>
                <input type="text" class="form-control datepicker" id="dapat_membaca" name="dapat_membaca"
                    value="{!! old('dapat_membaca') !!}" placeholder="">
                @if ($errors->has('dapat_membaca'))
                <span class="help-block">
                    <strong>{!! $errors->first('dapat_membaca') !!}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('alamat_lengkap') ? ' has-error' : '' }}">
                <label class="control-label">Alamat Lengkap</label>
                <textarea class="form-control" id="alamat_lengkap" rows="4" name="alamat_lengkap" value="{!! old('alamat_lengkap') !!}" placeholder="alamat"></textarea>
                    @if ($errors->has('alamat_lengkap'))
                    <span class="help-block">
                        <strong>{!! $errors->first('alamat_lengkap') !!}</strong>
                    </span>
                    @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('alamat_email') ? ' has-error' : '' }}">
                <label class="control-label">Alamat Email</label>
                <input type="text" class="form-control datepicker" id="alamat_email" name="alamat_email"
                    value="{!! old('alamat_email') !!}" placeholder="">
                @if ($errors->has('alamat_email'))
                <span class="help-block">
                    <strong>{!! $errors->first('alamat_email') !!}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('nomor_handphone_1') ? ' has-error' : '' }}">
                <label class="control-label">Nomor Handphone 1</label>
                <input type="text" class="form-control datepicker" id="nomor_handphone_1" name="nomor_handphone_1"
                    value="{!! old('nomor_handphone_1') !!}" placeholder="">
                @if ($errors->has('nomor_handphone_1'))
                <span class="help-block">
                    <strong>{!! $errors->first('nomor_handphone_1') !!}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('nomor_handphone_2') ? ' has-error' : '' }}">
                <label class="control-label">Nomor Handphone 2</label>
                <input type="text" class="form-control datepicker" id="nomor-handphone-2" name="nomor_handphone_2"
                    value="{!! old('nomor_handphone_2') !!}" placeholder="">
                @if ($errors->has('nomor_handphone_2'))
                <span class="help-block">
                    <strong>{!! $errors->first('nomor_handphone_2') !!}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <label class="control-label">Status</label>
            <div class="form-group">
                <select class="form-control" required name="status">
                    <option value="">Pilih disini</option>
                    <option value="Sudah-Menikah">Sudah Menikah</option>
                    <option value="Belum-Menikah">Belum Menikah</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('pendidikan_terakhir') ? ' has-error' : '' }}">
                <label class="control-label">Pendidikan Terakhir</label>
                <input type="text" class="form-control datepicker" id="pendidikan_terakhir" name="pendidikan_terakhir"
                    value="{!! old('pendidikan_terakhir') !!}" placeholder="">
                @if ($errors->has('pendidikan_terakhir'))
                <span class="help-block">
                    <strong>{!! $errors->first('pendidikan_terakhir') !!}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('nik_ibu') ? ' has-error' : '' }}">
                <label class="control-label">NIK Ibu</label>
                <input type="number" class="form-control datepicker" id="nik_ibu" name="nik_ibu"
                    value="{!! old('nik_ibu') !!}" placeholder="">
                @if ($errors->has('nik_ibu'))
                <span class="help-block">
                    <strong>{!! $errors->first('nik_ibu') !!}</strong>
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
            <div class="form-group{{ $errors->has('nik_ayah') ? ' has-error' : '' }}">
                <label class="control-label">NIK Ayah</label>
                <input type="text" class="form-control datepicker" id="nik_ayah" name="nik_ayah"
                    value="{!! old('nik_ayah') !!}" placeholder="">
                @if ($errors->has('nik_ayah'))
                <span class="help-block">
                    <strong>{!! $errors->first('nik_ayah') !!}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('nama_ayah') ? ' has-error' : '' }}">
                <label class="control-label">Nama Ayah</label>
                <input type="number" class="form-control datepicker" id="nama_ayah" name="nama_ayah"
                    value="{!! old('nama_ayah') !!}" placeholder="">
                @if ($errors->has('nama_ayah'))
                <span class="help-block">
                    <strong>{!! $errors->first('nama_ayah') !!}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="box-footer">
            <a href="{{ route('admin.penduduk.index') }}" type="button" class="btn btn-default">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
    </div>
</div>
<!-- /.box -->
</section>
</div>
@endsection
