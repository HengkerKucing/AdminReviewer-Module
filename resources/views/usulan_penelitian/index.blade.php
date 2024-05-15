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
                <h4 class="m-0">Usulan Penelitian</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <!-- Breadcrumb can be added here -->
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            @php
                $smallBoxData = [
                    ['color' => 'info', 'value' => 150, 'text' => 'PTK', 'icon' => 'ion-bag'],
                    ['color' => 'success', 'value' => '53%', 'text' => 'Bounce Rate', 'icon' => 'ion-stats-bars'],
                    ['color' => 'warning', 'value' => 44, 'text' => 'User Registrations', 'icon' => 'ion-person-add'],
                    ['color' => 'danger', 'value' => 65, 'text' => 'Unique Visitors', 'icon' => 'ion-pie-graph']
                ];
            @endphp

            @foreach($smallBoxData as $box)
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-{{ $box['color'] }}">
                        <div class="inner">
                            <h3>{{ $box['value'] }}</h3>
                            <p>{{ $box['text'] }}</p>
                        </div>
                        <div class="icon">
                            <i class="ion {{ $box['icon'] }}"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card card-danger card-outline filter-container">
                    <div class="card-header">
                        <h1 class="card-title font-weight-bold">Filter</h1>
                    </div>
                    <div class="card-body">
                        <form id="filter-form">
                            <div class="form-group">
                                <label for="filter-title">Tahun:</label>
                                <select class="form-control" id="filter-title">
                                    <option value="">-- Pilih tahun --</option>
                                    <!-- isi dengan data judul -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="filter-skema">Skema:</label>
                                <select class="form-control" id="filter-skema">
                                    <option value="">-- Pilih Skema --</option>
                                    <!-- isi dengan data judul -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="filter-status">Status:</label>
                                <select class="form-control" id="filter-status">
                                    <option value="">-- Pilih Status --</option>
                                    <!-- isi dengan data tahun -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Judul:</label>
                                <input type="search" class="form-control form-control-sm" placeholder=""
                                    aria-controls="datatable-main">
                            </div>
                            <div class="form-group">
                                <label>Nama Anggota:</label>
                                <input type="search" class="form-control form-control-sm" placeholder=""
                                    aria-controls="datatable-main">
                            </div>
                            <button type="submit" class="btn btn-danger">Filter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Usulan Penelitian</h3>
                    </div>
                    <div class="card-body">
                        <table id="datatable-main" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Skema</th>
                                    <th>Anggota</th>
                                    <th>Pendanaan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usulan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->usulan_judul }}</td>
                                        <td>{{ $item->skema->trx_skema_nama }}</td>
                                        <td>
                                            <!-- Isi dengan data anggota -->
                                        </td>
                                        <td>{{ $item->usulan_pendanaan }}</td>
                                        <td>
                                            <!-- Isi dengan status -->
                                        </td>
                                        <td>
                                            <div class="flex items-col">
                                                <button type="button" class="btn btn-block btn-sm btn-outline-info mr-2"
                                                    onclick="window.location.href = 'ref-skema-file'"><i
                                                        class="fas fa-eye"></i></button>
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
</section>
@endsection

@push('js')
    <!-- Add your JavaScript here -->
@endpush