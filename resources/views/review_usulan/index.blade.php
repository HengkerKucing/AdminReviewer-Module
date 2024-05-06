@extends('layouts.app')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 text-uppercase">
                    <h4 class="m-0">Review Usulan</h4>
                </div>
                <div class="col-sm-6">
                    <!-- <ol class="breadcrumb float-sm-right">
                        {{-- Tambahkan breadcrumb jika diperlukan --}}
                    </ol> -->
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
                            <table id="datatable-main" class="table table-bordered table-striped">
                                <thead>
                                    <th>No</th>
                                    <th>Kriteria</th>
                                    <th>Bobot</th>
                                    <th>Nilai</th>
                                </thead>
                                <tbody>
                                    @foreach ($usulan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->kriteria_nama }}</td>
                                            <td>{{ $item->kriteria_bobot }}</td>
                                            
                                            <td>
                                            <select name="cars" id="cars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            </select>
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

    <!-- Styling -->
    @push('styles')
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
    @endpush
@endsection

@push('js')
    <!-- Tambahkan script JavaScript jika diperlukan -->
@endpush
