@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa"></i></a></li>
            <li class="active"></li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Data Penduduk</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-9">
                        <a href="{{ route('admin.penduduk.create') }}" id="btn-create" class="btn btn-success mb-2"
                            style="margin-bottom: 10px;">
                            <i class="fa fa-pencil"></i>
                            <span>Tambah</span>
                        </a>
                        <a href="{{ route('admin.penduduk.index') }}" id="btn-create" class="btn btn-success mb-2"
                        style="margin-bottom: 10px;">
                        <i class="glyphicon glyphicon-refresh"></i>
                        <span>Refresh</span>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <form action="{{ route('admin.penduduk.index') }}" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Pencarian...">
                                <span class="input-group-btn">
                                    <button class="btn btn-success text-white">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">NIK</th>
                                <th class="text-center">No KK</th>
                                <th class="text-center">Nama Lengkap</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Agama</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $penduduk)
                            <tr>
                                <td>{{ $penduduk->nik }}</td>
                                <td>{{ $penduduk->no_kk }}</td>
                                <td>{{ $penduduk->nama_lengkap }}</td>
                                <td>{{ $penduduk->alamat_lengkap }}</td>
                                <td>{{ $penduduk->agama }}</td>
                                <td>@if ($penduduk->jenis_kelamin=='L')
                                    Laki-laki
                                    @endif
                                    @if ($penduduk->jenis_kelamin=='P')
                                    Perempuan
                                    @endif
                                </td>
                                <td>{{ $penduduk->status }}</td>
                                <td class="text-center">
                                    <div class="col-md-12">
                                        <a href="{{ route('admin.penduduk.edit', $penduduk->id) }}"
                                            class="btn btn-warning text-white">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('admin.penduduk.show', $penduduk->id) }}"
                                            class="btn btn-info text-white">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="deletePenduduk({{ $penduduk->id }})"
                                            class="btn btn-danger text-white" data-id="{{ $penduduk->id }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $data->links() }}
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
    </section>
</div>
@endsection

@push('scripts')
<script>
    function deletePenduduk(id){
        let url = '/admin/penduduk/'+id
        if (confirm('Apakah yakin anda inigin mengahapus data ?') == true){
            console.log(url);
            $.ajax({
                url : url,
                type: 'POST',
                data : {
                    id : id,
                    _method: 'delete'
                },
                success: function(res){
                    window.location.reload();
                }
            });
        }
    }
</script>
@endpush