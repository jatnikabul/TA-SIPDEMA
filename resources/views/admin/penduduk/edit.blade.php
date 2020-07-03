@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                </a>
            </li>
            <li>
            <a href="{{ route('admin.penduduk.index') }}">
                </a>
            </li>
            <li class="active"></li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Ubah Penduduk</h3>
            </div>
            <form method="POST" action="{{ route('admin.penduduk.update',$penduduk->id) }}">
                @csrf
                @method('put')
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('nik') ? ' has-error' : ' ' }}">
                            <label class="control-label">NIK</label>
                            <input type="number" class="form-control" name="nik" value="{{ $penduduk->nik }}"
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
                            <input type="number" class="form-control" name="no_kk" value="{{ $penduduk->no_kk}}"
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
                                value="{{ $penduduk->nama_lengkap }}" placeholder="">
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
                                value="{{ $penduduk->nama_panggilan }}" placeholder="">
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
                                <option value="-">Pilih Jenis Kelamin</option>
                                <option value="L" @if ($penduduk->jenis_kelamin=='L') selected @endif>Laki-Laki</option>
                                <option value="P" @if ($penduduk->jenis_kelamin=='P') selected @endif>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                            <label class="control-label">Tempat Lahir</label>
                            <input type="text" class="form-control datepicker" id="tempat_lahir" name="tempat_lahir"
                                name="tempat_lahir" value="{{  $penduduk->tempat_lahir }}" placeholder="">
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
                                value="{{ date('Y-m-d',strtotime($penduduk->tanggal_lahir)) }}" placeholder="">
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
                                <option value="-">Pilih Agama</option>
                                <option value="Islam" @if ($penduduk->agama=='Islam') selected @endif>Islam</option>
                                <option value="Kristen" @if ($penduduk->agama=='Kristen') selected @endif>Kristen</option>
                                <option value="Budha" @if ($penduduk->agama=='Budha')selected @endif>Budha</option>
                                <option value="Konghucu" @if ($penduduk->agama=='Konghucu') selected @endif>Konghucu</option>
                                <option value="Hindu" @if ($penduduk->agama=='Hindu') selected @endif>Hindu</option>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">pekerjaan</label>
                            <select class="form-control" required name="pekerjaan">
                                <option value="-">Pilih Pekerjaan</option>
                                <option value="Belum/Tidak Bekerja" @if ($penduduk->pekerjaan=='Belum/Tidak Bekerja') selected @endif>Belum/Tidak Bekerja</option>
                                <option value="Buruh" @if ($penduduk->pekerjaan=='Buruh') selected @endif>Buruh</option>
                                <option value="Pelajar/Mahasiswa" @if ($penduduk->pekerjaan=='Pelajar/Mahasiswa') selected @endif>Pelajar/Mahasiswa</option>
                                <option value="Pegawai Negeri Sipil" @if ($penduduk->pekerjaan=='Pegawai Negeri Sipil') selected @endif>Pegawai Negeri Sipil</option>
                                <option value="Pensiunan" @if ($penduduk->pekerjaan=='Pensiunan') selected @endif>Pensiunan</option>
                                <option value="Tentara Nasional Indonesia" @if ($penduduk->pekerjaan=='Tentara Nasional Indonesia') selected @endif>Tentara Nasional Indonesia</option>
                                <option value="Kepolisian RI" @if ($penduduk->pekerjaan=='Kepolisian RI') selected @endif>Kepolisian RI</option>
                                <option value="Karyawan BUMN" @if  ($penduduk->pekerjaan=='Karyawan BUMN') selected @endif>Karyawan BUMN</option>
                                <option value="Karyawan Honorer" @if  ($penduduk->pekerjaan=='Karyawan Honorer') selected @endif>Karyawan Honorer</option>
                                <option value="Karyawan Swasta" @if ($penduduk->pekerjaan=='Karyawan Swasta') selected @endif>Karyawan Swasta</option>
                                <option value="Wirausaha" @if  ($penduduk->pekerjaan=='Wirausaha Swasta') selected @endif>Wirausaha</option>
                                <option value="dan lain lain" @if   ($penduduk->pekerjaan=='dan lain lain')selected @endif>dan lain lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Status Dalam Kleuarga</label>
                            <select class="form-control" required name="kedudukan_dalam_keluarga">
                                <option value="kepala keluarga" @if ($penduduk->kedudukan_dalam_keluarga=='Kepala Kleuarga') selected @endif>Kepala Kleuarga</option>
                                <option value="Istri" @if  ($penduduk->kedudukan_dalam_keluarga=='Istri') selected @endif>Istri</option>
                                <option value="Anak" @if   ($penduduk->kedudukan_dalam_keluarga=='Anak')selected @endif>Anak</option> 
                            </select>    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                            <label class="control-label">Keterangan</label>
                            <textarea class="form-control" id="keterangan" rows="4" 
                            name="keterangan"> {{  $penduduk->keterangan }} </textarea>
                            @if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{!! $errors->first('keterangan') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Dapat Membaca</label>
                        <div class="input-group{{ $errors->has('dapat_membaca') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                            <input type="text" class="form-control datepicker" id="dapat_membaca" name="dapat_membaca"
                                value="{{  $penduduk->dapat_membaca }}" placeholder="">
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
                            <textarea class="form-control" id="alamat_lengkap" rows="4"
                                name="alamat_lengkap"> {{  $penduduk->alamat_lengkap }} </textarea>
                            @if ($errors->has('alamat_lengkap'))
                            <span class="help-block">
                                <strong>{!! $errors->first('alamat_lengkap') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Alamat Email</label>
                        <div class="input-group{{ $errors->has('alamat_email') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control datepicker" id="alamat_email"  name="alamat_email"
                            value="{{ $penduduk->alamat_email }}" placeholder="">
                            @if ($errors->has('alamat_email'))
                            <span class="help-block">
                                <strong>{!! $errors->first('alamat_email') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Nomor Handphone 1</label>
                        <div class="input-group{{ $errors->has('nomor_handphone_1') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="number" class="form-control datepicker" id="nomor_handphone_1"  name="nomor_handphone_1"
                            value="{{ $penduduk->nomor_handphone_1 }}" placeholder="">
                            @if ($errors->has('nomor_handphone_1'))
                            <span class="help-block">
                                <strong>{!! $errors->first('nomor_handphone_1') !!}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Nomor Handphone 2</label>
                        <div class="input-group{{ $errors->has('nomor_handphone_2') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="number" class="form-control datepicker" id="nomor_handphone_2"  name="nomor_handphone_2"
                            value="{{ $penduduk->nomor_handphone_2 }}" placeholder="">
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
                                <option value="-">Pilih Status</option>
                                <option value="Sudah Menikah" @if ($penduduk->status=='Sudah Menikah') selected
                                    @endif>Sudah Menikah</option>
                                <option value="Belum Menikah" @if ($penduduk->status=='Belum Menikah') selected
                                    @endif>Belum Menikah</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Pendidikan Terakhir</label>
                            <select class="form-control" required name="pendidikan_terakhir">
                                <option value="-">Pilih</option>
                                <option value="SD" @if ($penduduk->pendidikan_terakhir=='SD') selected @endif>SD</option>
                                <option value="SMP" @if ($penduduk->pendidikan_terakhir=='SMP') selected @endif>SMP</option>
                                <option value="SMA" @if ($penduduk->pendidikan_terakhir=='SMA') selected @endif>SMA</option>
                                <option value="SMK" @if ($penduduk->pendidikan_terakhir=='SMK') selected @endif>SMK</option>
                                <option value="UNIVERSITAS" @if ($penduduk->pendidikan_terakhir=='UNIVERSITAS') selected @endif>UNIVERSITAS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('nik_ibu') ? ' has-error' : '' }}">
                            <label class="control-label">NIK Ibu</label>
                            <input type="number" class="form-control datepicker" id="nik_ibu" name="nik_ibu"
                                value="{{  $penduduk->nik_ibu }}" placeholder="">
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
                                value="{{  $penduduk->nama_ibu }}" placeholder="">
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
                                value="{{  $penduduk->nik_ayah }}" placeholder="">
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
                                value="{{  $penduduk->nama_ayah }}" placeholder="">
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