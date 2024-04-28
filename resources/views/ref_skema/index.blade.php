@extends('layouts.app')
@push('css')
<!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 text-uppercase">
                    <h4 class="m-0">Referensi Skema</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                    <div class="card-header">
                            <h5 class="m-0"></h5>
                            <div class="card-tools">
                                <a href="{{ route('ref-skema.create') }}" class="btn btn-sm btn-success"><i
                                    class="fas fa-plus-circle"></i> Tambah Skema
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                        <table id="datatable-main" class="table table-bordered table-striped ">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Skema</th>
                                    <th>Kode Skema</th>
                                    <th>Periode</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                @foreach ($skema as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->trx_skema_nama }}</td>
                                            <td>{{ $item->trx_skema_kode }}</td>
                                            <td>{{ $item->periode_tahun }}</td>
                                            <td>
                                                <div class="flex items-center">
                                                    <a href="/ref-skema-file/{{$item->trx_skema_id}}" type="button" title="Skema File" class="btn btn-block btn-sm btn-outline-info mb-2 " onclick="window.location.href = 'ref-skema-file/'">
                                                        <i class="far fa-file"></i>
                                                    </a>
                                                    <a href="/ref-pendanaan/{{$item->trx_skema_id}}" type="button" title="Pendanaan" class="btn btn-block btn-sm btn-outline-info mb-2" onclick="window.location.href = 'ref-pendanaan/'">
                                                        <i class="fas fa-money-bill-wave-alt"></i>
                                                    </a>
                                                    <a href="/ref-skema-setting/{{$item->trx_skema_id}}" type="button" title="Skema Setting" class="btn btn-block btn-sm btn-outline-info mb-2" onclick="window.location.href = 'ref-pendanaan/'">
                                                        <i class="fas fa-cog"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-block btn-sm btn-outline-info mb-2" data-toggle="dropdown">
                                                        <i class="fas fa-cog"></i>
                                                    </button>
                                                    <form class="dropdown-menu" role="menu" onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('ref-skema.destroy', $item->trx_skema_id) }}" method="POST">
                                                        <a class="dropdown-item" href="{{ route('ref-skema.edit', $item->trx_skema_id) }}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <a class="dropdown-item" type="submit">Hapus</a>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Styling -->
        <style>
    .flex {
        display: flex;
    }

    .items-col {
        flex-direction: column;
    }

    .mb-2 {
        margin-right: 5px;
        /* width: auto; */
    }
    </style>
        <!-- End Styling -->
    </div>
    </div>
@endsection
@push('js')
@endpush