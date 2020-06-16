@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Penduduk
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i>
                    Admin
                </a>
            </li>
            <li>
            <a href="{{ route('admin.penduduk.index') }}">
                    Penduduk
                </a>
            </li>
            <li class="active">Tambah Penduduk</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Penduduk</h3>
            </div>
            <form method="POST" action="{{ route('admin.penduduk.store') }}">
                @csrf
                @method('post')
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('nik') ? ' has-error' : ' ' }}">
                            <label class="control-label">NIK</label>
                            <input type="number" class="form-control" name="nik" value="{!! old('nik') !!}"
                                placeholder="">
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
                            <input type="number" class="form-control" name="no_kk" value="{!! old('no_kk') !!}"
                                placeholder="">
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
                            <input type="text" class="form-control" name="nama_lengkap"
                                value="{!! old('nama_lengkap') !!}" placeholder="">
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
                            <input type="text" class="form-control" name="nama_panggilan"
                                value="{!! old('nama_panggilan') !!}" placeholder="">
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
                                <option value="-">Pilih Jenis</option>
                                <option value="L" @if (old('jenis_kelamin')=='L' ) selected @endif>Laki-laki</option>
                                <option value="P" @if (old('jenis_kelamin')=='P' ) selected @endif>Perempuan</option>
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
                                <option value="-">Pilih agama</option>
                                <option value="Islam" @if (old('agama')=='Islam' ) selected @endif>Islam</option>
                                <option value="Kristen" @if (old('agama')=='Kristen' ) selected @endif>Kristen</option>
                                <option value="Budha" @if (old('agama')=='Budha' ) selected @endif>Budha</option>
                                <option value="Konghucu" @if (old('agama')=='Konghucu' ) selected @endif>Konghucu</option>
                                <option value="Hindu" @if (old('agama')=='Hindu' ) selected @endif>Hindu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Pekerjaan</label>
                            <select class="form-control" required name="pekerjaan">
                                <option value="-">Pilih pekerjaan</option>
                                <option value="Belum-/-Tidak-Bekerja" @if (old('pekerjaan')=='Belum-/-Tidak-Bekerja' ) selected @endif>Belum/Tidak Bekerja</option>
                                <option value="Buruh" @if (old('pekerjaan')=='Buruh' ) selected @endif>Buruh</option>
                                <option value="Pelajar/Mahasiswa" @if (old('pekerjaan')=='Pelajar/Mahasiswa' ) selected @endif>Pelajar/Mahasiswa</option>
                                <option value="Pegawai-Negeri-Sipil" @if (old('pekerjaan')=='Pegawai-Negeri-Sipil' ) selected @endif>Pegawai Negeri Sipil</option>
                                <option value="Pensiunan" @if (old('pekerjaan')=='Pensiunan' ) selected @endif>Pensiunan</option>
                                <option value="Tentara-Nasional-Indonesia" @if (old('pekerjaan')=='Tentara-Nasional-Indonesia' ) selected @endif>Tentara Nasional Indonesia</option>
                                <option value="Kepolisian-RI" @if (old('pekerjaan')=='Kepolisian-RI' ) selected @endif>Kepolisian RI</option>
                                <option value="Karyawan-BUMN" @if (old('pekerjaan')=='Karyawan-BUMN' ) selected @endif>Karyawan BUMN</option>
                                <option value="Karyawan-Honorer" @if (old('Karyawan-Honorer')=='Buruh' ) selected @endif>Karyawan Honorer</option>
                                <option value="Karyawan-Swasta" @if (old('pekerjaan')=='Karyawan-Swasta' ) selected @endif>Karyawan Swasta</option>
                                <option value="Wirausaha" @if (old('pekerjaan')=='Wirausaha' ) selected @endif>Wirausaha</option>
                                <option value="dan-lain-lain" @if (old('pekerjaan')=='dan-lain-lain' ) selected @endif>dan lain lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('kedudukan_dalam_keluarga') ? ' has-error' : '' }}">
                            <label class="control-label">Kedudukan Dalam Keluarga</label>
                            <input type="text" class="form-control datepicker" id="kedudukan-dalam-keluarga"
                                name="kedudukan_dalam_keluarga" value="{!! old('kedudukan_dalam_keluarga') !!}"
                                placeholder="">
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
                            <textarea class="form-control" id="alamat_lengkap" rows="4" name="alamat_lengkap"
                                value="{!! old('alamat_lengkap') !!}" placeholder="alamat"></textarea>
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
                            <input type="number" class="form-control datepicker" id="nomor_handphone_1"
                                name="nomor_handphone_1" value="{!! old('nomor_handphone_1') !!}" placeholder="">
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
                            <input type="number" class="form-control datepicker" id="nomor-handphone-2"
                                name="nomor_handphone_2" value="{!! old('nomor_handphone_2') !!}" placeholder="">
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
                                <option value="-">Pilih status</option>
                                <option value="Sudah-Menikah" @if (old('status')=='Sudah-Menikah' ) selected @endif>
                                    Sudah Menikah</option>
                                <option value="Belum-Menikah" @if (old('status')=='Belum-Menikah' ) selected @endif>
                                    Belum Menikah</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Pendidikan Terakhir</label>
                            <select class="form-control" required name="pendidikan_terakhir">
                                <option value="-">Pilih</option>
                                <option value="SD" @if (old('pendidikan-terakhir')=='SD' ) selected @endif>SD</option>
                                <option value="SMP" @if (old('pendidikan-terakhir')=='SMP' ) selected @endif>SMP</option>
                                <option value="SMA" @if (old('pendidikan-terakhir')=='SMA' ) selected @endif>SMA</option>
                                <option value="SMK" @if (old('pendidikan-terakhir')=='SMK' ) selected @endif>SMK</option>
                                <option value="UNIVERSITAS" @if (old('agama')=='HiUNIVERSITASndu' ) selected @endif>UNIVERSITAS</option>
                            </select>
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
                            <input type="number" class="form-control datepicker" id="nik_ayah" name="nik_ayah"
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
                            <input type="text" class="form-control datepicker" id="nama_ayah" name="nama_ayah"
                                value="{!! old('nama_ayah') !!}" placeholder="">
                            @if ($errors->has('nama_ayah'))
                            <span class="help-block">
                                <strong>{!! $errors->first('nama_ayah') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{ route('admin.penduduk.index') }}" type="button" class="btn btn-default">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <!-- /.box -->
    </section>
</div>
@endsection