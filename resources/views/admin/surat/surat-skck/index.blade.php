@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat SKCK
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
            <li class="active">Surat SKCK</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Data Surat SKCK</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-9">
                        <a href="{{ route('admin.surat.surat-skck.create') }}" id="btn-create" class="btn btn-success mb-2"
                            style="margin-bottom: 10px;">
                            <i class="fa fa-pencil"></i>
                            <span>Tambah</span>
                        </a>
                        <a href="{{ route('admin.surat.surat-skck.index') }}" id="btn-create" class="btn btn-success mb-2"
                        style="margin-bottom: 10px;">
                        <i class="glyphicon glyphicon-refresh"></i>
                        <span>Refresh</span>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <form action="{{ route('admin.surat.surat-skck.index') }}" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="nik" placeholder="Pencarian...">
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
                                <th class="text-center">Penduduk id</th>
                                <th class="text-center">Peruntukan Surat </th>
                                <th class="text-center">Aksi</>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $surat_skck)
                            <tr>
                                <td>{{ $surat_skck->no_surat }}</td>
                                <td>{{ $surat_skck->penduduk_id }}</td>
                                <td>{{ $surat_skck->peruntukan_surat}}</td>
                                <td class="text-center">
                                    <div class="col-md-12">
                                        <a href="{{ route('admin.surat.surat-skck.edit', $surat_skck->id) }}"
                                            class="btn btn-warning text-white">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('admin.surat.surat-skck.show', $surat_skck->id) }}"
                                            class="btn btn-info text-white">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="deleteSuratSkck({{ $surat_skck->id }})"
                                            class="btn btn-danger text-white" data-id="{{ $surat_skck->id }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('admin.surat.print-surat-skck', $surat_skck->id) }}" 
                                            class="btn btn-primary" target="surat-skck">
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
    function deleteSuratSkck(id){
        let url = '/admin/surat/surat-skck/'+id
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