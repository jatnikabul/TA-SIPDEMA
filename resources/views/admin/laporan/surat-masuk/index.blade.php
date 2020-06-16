@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Masuk
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
            <li class="active">Surat Masuk</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Data Surat Masuk</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-9">
                        <a href="{{ route('admin.laporan.surat-masuk.create') }}" id="btn-create" class="btn btn-primary mb-2"
                            style="margin-bottom: 10px;">
                            <i class="fa fa-pencil"></i>
                            <span>Tambah</span>
                        </a>
                        <a href="{{ route('admin.laporan.surat-masuk.index') }}" id="btn-create" class="btn btn-info mb-2"
                        style="margin-bottom: 10px;">
                        <i class="glyphicon glyphicon-refresh"></i>
                        <span>Refresh</span>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <form action="{{ route('admin.laporan.surat-masuk.index') }}" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="nama_pemohon" placeholder="Pencarian...">
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
                                <th>Pemohon</th>
                                <th>Perihal</th>
                                <th>Tanggal</th>
                                <th class="text-center">Aksi</>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $surat_masuk)
                            <tr>
                                <td>{{ $surat_masuk->no_surat }}</td>
                                <td>{{ $surat_masuk->pemohon }}</td>
                                <td>{{ $surat_masuk->perihal }}</td>
                                <td>{{ $surat_masuk->tanggal}}</td>
                                <td class="text-center">
                                    <div class="col-md-12">
                                        <a href="{{ route('admin.laporan.surat-masuk.edit', $surat_masuk->id) }}"
                                            class="btn btn-warning text-white">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('admin.laporan.surat-masuk.show', $surat_masuk->id) }}"
                                            class="btn btn-info text-white">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="deleteSuratMasuk({{ $surat_masuk->id }})"
                                            class="btn btn-danger text-white" data-id="{{ $surat_masuk->id }}">
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
    function deleteSuratMasuk(id){
        let url = '/admin/laporan/surat-masuk/'+id
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