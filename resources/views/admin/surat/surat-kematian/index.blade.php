@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Kematian
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
            <li class="active">Surat Kematian</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Data Surat Kematian</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-9">
                        <a href="{{ route('admin.surat.surat-kematian.create') }}" id="btn-create" class="btn btn-success mb-2"
                            style="margin-bottom: 10px;">
                            <i class="fa fa-pencil"></i>
                            <span>Tambah</span>
                        </a>
                        <a href="{{ route('admin.surat.surat-kematian.index') }}" id="btn-create" class="btn btn-success mb-2"
                        style="margin-bottom: 10px;">
                        <i class="glyphicon glyphicon-refresh"></i>
                        <span>Refresh</span>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <form action="{{ route('admin.surat.surat-kematian.index') }}" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="nama_yang_meninggal" placeholder="Pencarian...">
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
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">No Surat</th>
                                <th class="text-center">Hari</th>
                                <th class="text-center">Waktu</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Meninggal Di</th>
                                <th class="text-center">Nama Yang Meninggal</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $surat_kematian)
                            <tr>
                                <td>{{ $surat_kematian->no_surat }}</td>
                                <td>{{ $surat_kematian->hari }}</td>
                                <td>{{ $surat_kematian->waktu }}</td>
                                <td>{{ $surat_kematian->tanggal}}</td>
                                <td>{{ $surat_kematian->meninggal_di}}</td>
                                <td>{{ $surat_kematian->penduduk_id}}</td>
                                <td class="text-center">
                                    <div class="col-md-12">
                                        <a href="{{ route('admin.surat.surat-kematian.edit', $surat_kematian->id) }}"
                                            class="btn btn-warning text-white">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('admin.surat.surat-kematian.show', $surat_kematian->id) }}"
                                            class="btn btn-info text-white">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="deleteSuratKematian({{ $surat_kematian->id }})"
                                            class="btn btn-danger text-white" data-id="{{ $surat_kematian->id }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('admin.surat.print-kematian', $surat_kematian->id) }}" 
                                            class="btn btn-primary" target="surat-kematian">
                                            <i class="fa fa-print" aria-hidden="true"></i>
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
    function deleteSuratKematian(id){
        let url = '/admin/surat/surat-kematian/'+id
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