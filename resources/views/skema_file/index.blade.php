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
                    <h4 class="m-0">Referensi Skema File</h4>
                    @foreach ($skema as $item)
                    <h5 class="m-0">{{ $item->trx_skema_nama}}</h5>
                    @endforeach
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

                            <a href="{{ route('skema-file.create', $trx_skema_id) }}" class="btn btn-sm btn-success">
                                <i class="fas fa-plus-circle"></i> Tambah File
                            </a>

                            </div>
                        </div>
                        <div class="card-body">
                        <table id="datatable-main" class="table table-bordered table-striped ">
                                <thead>
                                    <th>No</th>
                                    <th>Jenis File</th>
                                    <th>Ekstensi</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                @foreach ($skemafile as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->file_caption}}</td>
                                            <td>{{ $item->file_type_readable }}</td>
                                            <td>
                                                <!-- <div class="flex items-center">
                                                <a href="{{ route('skema-file.edit', ["trx_skema_id"=>$trx_skema_id, "skema_file"=> $item -> skema_file_id]) }}" class="btn btn-block btn-sm btn-outline-info mb-2">
                                                    <i class="fas fa-edit"></i>
                                                </a> -->
                                                <div class="flex items-center">
                                                    <button type="button" class="btn btn-block btn-sm btn-outline-info mb-2" data-toggle="dropdown"><i 
                                                            class="fas fa-cog"></i></button>
                                                    <form class="dropdown-menu" role="menu" action="{{ route('skema-file.destroy', ['trx_skema_id' => $trx_skema_id, 'skema_file' => $item->skema_file_id]) }}" method="POST">
                                                        <a class="dropdown-item" href="{{ route('skema-file.edit', ['trx_skema_id' => $trx_skema_id, 'skema_file' => $item->skema_file_id]) }}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</button>
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