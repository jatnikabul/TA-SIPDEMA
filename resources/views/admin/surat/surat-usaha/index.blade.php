@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Keterangan Usaha
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
            <li class="active">Surat Keterangan Usaha</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Data Surat Keterangan Usaha</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-9">
                        <a href="{{ route('admin.surat.surat-usaha.create') }}" id="btn-create" class="btn btn-success mb-2"
                            style="margin-bottom: 10px;">
                            <i class="fa fa-pencil"></i>
                            <span>Tambah</span>
                        </a>
                        <a href="{{ route('admin.surat.surat-usaha.index') }}" id="btn-create" class="btn btn-success mb-2"
                        style="margin-bottom: 10px;">
                        <i class="glyphicon glyphicon-refresh"></i>
                        <span>Refresh</span>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <form action="{{ route('admin.surat.surat-usaha.index') }}" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="nama_perusahaan" placeholder="Pencarian...">
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
                                <th class="text-center">No Surat</th>
                                <th class="text-center">Jenis Usaha</th>
                                <th class="text-center">Nama Perusahaan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $surat_usaha)
                            <tr>
                                <td>{{ $surat_usaha->no_surat }}</td>
                                <td>{{ $surat_usaha->jenis_usaha }}</td>
                                <td>{{ $surat_usaha->nama_perusahaan }}</td>
                                <td class="text-center">
                                    <div class="col-md-12">
                                        <a href="{{ route('admin.surat.surat-usaha.edit', $surat_usaha->id) }}"
                                            class="btn btn-warning text-white">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('admin.surat.surat-usaha.show', $surat_usaha->id) }}"
                                            class="btn btn-info text-white">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="deleteSuratUsaha({{ $surat_usaha->id }})"
                                            class="btn btn-danger text-white" data-id="{{ $surat_usaha->id }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('admin.surat.print-surat-usaha', $surat_usaha->id) }}" 
                                            class="btn btn-primary" target="surat-usaha">
                                            <i class="fa fa-print" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
    function deleteSuratUsaha(id){
        let url = '/admin/surat/surat-usaha/'+id
        if (confirm('Apakah yakin anda ingin menghapus data ?') == true){
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