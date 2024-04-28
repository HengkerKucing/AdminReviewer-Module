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
                    <h4 class="m-0">Referensi Skema Pendanaan</h4>
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
                                <a href="{{ route('ref-pendanaan.create') }}" class="btn btn-sm btn-success"><i
                                    class="fas fa-plus-circle"></i> Tambah Pendanaan
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                        <table id="datatable-main" class="table table-bordered table-striped ">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Keterangan</th>
                                    <th>Persentase</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                @foreach ($pendanaan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->pendanaan_nama}}</td>
                                            <td>{{ $item->pendanaan_keterangan}}</td>
                                            <td>{{ $item->pendanaan_persentase}}</td>
                                            <td>
                                                <div class="flex items-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('ref-pendanaan.destroy', $item->pendanaan_id) }}" method="POST">
                                                    <a href="{{ route('ref-pendanaan.edit', $item->pendanaan_id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                                <!-- ////////////////////////////////////////// -->
                                                    <a href="/ref-skema-file/{{$item->id}}/update" type="button" class="btn btn-block btn-sm btn-outline-info mb-2 " onclick="window.location.href = 'ref-skema-file/'">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
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
    </div>
    </div>
@endsection
@push('js')
@endpush