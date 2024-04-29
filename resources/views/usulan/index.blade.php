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
                    <h4 class="m-0">Daftar Usulan</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        // Kasih filter
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
                        <table id="datatable-main" class="table table-bordered table-striped ">
                                <thead>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Skema</th>
                                    <th>Anggota</th>
                                    <th>Pendanaan</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </thead>
                                <tbody>
                                @foreach ($usulan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->usulan_judul }}</td>
                                            <td>{{ $item->skema->trx_skema_nama }}</td>
                                            <td>
                                                @foreach ($item->anggotas()->get() as $anggota)
                                                    <div class="card shadow-sm mb-2">
                                                        <div class="card-body">
                                                            {{ $anggota->dosen_id }}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </td>
                                            <td>{{ $item->usulan_pendanaan }}</td>
                                            <td>
                                                @foreach ($item->statuses() as $status)
                                                    {{ $status->status_id }}
                                                @endforeach
                                            </td>

                                            <td>
                                                <div class="flex items-col">
                                                <button type="button" class="btn btn-block btn-sm btn-outline-info mr-2";
                                                    onclick="window.location.href = 'ref-skema-file'"><i class="fas fa-eye"></i>
                                                </button>
                                                </div>
                                            </td>
                                            <style>
                                            .flex {
                                                display: flex;
                                            }

                                            .flex-col {
                                                flex-direction: column;
                                            }
                                            .mb-2 {
                                                margin-right: 5px;
                                            }
                                            </style>
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