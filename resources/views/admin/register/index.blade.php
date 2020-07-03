@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Surat Keterangan Kelahiran
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
            <li class="active">Surat Keterangan Kelahiran</li>
        </ol>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Data Surat Keterangan Kelahiran</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-9">
                        <a href="{{ route('admin.register.create') }}" id="btn-create" class="btn btn-success mb-2"
                            style="margin-bottom: 10px;">
                            <i class="fa fa-pencil"></i>
                            <span>Tambah</span>
                        </a>
                        <a href="{{ route('admin.register.index') }}" id="btn-create" class="btn btn-success mb-2"
                        style="margin-bottom: 10px;">
                        <i class="glyphicon glyphicon-refresh"></i>
                        <span>Refresh</span>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <form action="{{ route('admin.register.index') }}" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="nama_anak" placeholder="Pencarian...">
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
                                <th class="text-center">Nama</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Jenis Surat</th>
                                <th class="text-center">Aksi</>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $register)
                            <tr>
                                <td>{{ $register->no_surat }}</td>
                                <td>{{ $register->nama }}</td>
                                <td>{{ $register->tanggal }}</td>
                                <td>{{ $register->alamat}}</td>
                                <td>{{ $register->jenis_surat}}</td>
                                <td class="text-center">
                                    <div class="col-md-12">
                                        <a href="{{ route('admin.register.edit', $register->id) }}"
                                            class="btn btn-warning text-white">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('admin.register.show', $register->id) }}"
                                            class="btn btn-info text-white">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="deleteRegister({{ $register->id }})"
                                            class="btn btn-danger text-white" data-id="{{ $register->id }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('admin.register.print.surat-register', $surat_register->id) }}" 
                                            class="btn btn-primary" target="surat-register">
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
    function deleteRegister(id){
        let url = '/admin/register/'+id
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