@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Ijin Keramaian
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
            <li class="active">Surat Ijin Keramaian</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Data Surat Ijin Keramaian</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-9">
                        <a href="{{ route('admin.surat.surat-keramaian.create') }}" id="btn-create" class="btn btn-primary mb-2"
                            style="margin-bottom: 10px;">
                            <i class="fa fa-pencil"></i>
                            <span>Tambah</span>
                        </a>
                        <a href="{{ route('admin.surat.surat-keramaian.index') }}" id="btn-create" class="btn btn-info mb-2"
                        style="margin-bottom: 10px;">
                        <i class="glyphicon glyphicon-refresh"></i>
                        <span>Refresh</span>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <form action="{{ route('admin.surat.surat-keramaian.index') }}" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="acara" placeholder="Pencarian...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default">
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
                                <th>No Surat</th>
                                <th>Acara</th>
                                <th>Tempat</th>
                                <th>Waktu</th>
                                <th class="text-center">Aksi</>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $surat_keramaian)
                            <tr>
                                <td>{{ $surat_keramaian->no_surat }}</td>
                                <td>{{ $surat_keramaian->acara }}</td>
                                <td>{{ $surat_keramaian->tempat }}</td>
                                <td>{{ $surat_keramaian->waktu}}</td>
                                <td class="text-center">
                                    <div class="col-md-12">
                                        <a href="{{ route('admin.surat.surat-keramaian.edit', $surat_keramaian->id) }}"
                                            class="btn btn-warning text-white">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('admin.surat.surat-keramaian.show', $surat_keramaian->id) }}"
                                            class="btn btn-info text-white">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="deleteSuratKeramaian({{ $surat_keramaian->id }})"
                                            class="btn btn-danger text-white" data-id="{{ $surat_keramaian->id }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
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
    function deleteSuratKeramaian(id){
        let url = '/admin/surat/surat-keramaian/'+id
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