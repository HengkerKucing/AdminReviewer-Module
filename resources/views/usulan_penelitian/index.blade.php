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
            <div class="col-md-3">
                <div class="card card-primary card-outline filter-container">
                    <div class="card-header">
                        <h1 class="card-title font-weight-bold">Filter</h1>
                    </div>
                    <div class="card-body">
                        <form id="filter-form">
                            <div class="form-group">
                                <label>Judul:</label>
                                <input name="judul" class="form-control form-control-sm" placeholder="Judul Usulan"
                                    value="{{ request('judul') }}" aria-controls="datatable-main">
                            </div>
                            <div class="form-group">
                                <label for="filter-skema">Skema:</label>
                                <select class="form-control" id="filter-skema" name="skema_nama">
                                    <option value="">-- Pilih Skema --</option>
                                    @foreach($skemas as $skema)
                                        <option value="{{ $skema->trx_skema_nama }}" {{ request('skema_nama') == $skema->trx_skema_nama ? 'selected' : '' }}>
                                            {{ $skema->trx_skema_nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Anggota:</label>
                                <input type="search" name="anggota" class="form-control form-control-sm"
                                    placeholder="Ketua/Anggota Pengusul" aria-controls="datatable-main">
                            </div>
                            <div class="form-group">
                                <label for="filter-year">Tahun:</label>
                                <select class="form-control" id="filter-year" name="tahun">
                                    <option value="">-- Pilih Tahun --</option>
                                    @foreach($years as $year)
                                        <option value="{{ $year }}" {{ request('tahun') == $year ? 'selected' : '' }}>
                                            {{ $year }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="filter-status">Status:</label>
                                <select class="form-control" id="filter-status" name="status_nama">
                                    <option value="">-- Pilih Status --</option>
                                    @foreach($statuses as $status)
                                        <option value="{{ $status->status_nama }}">{{ $status->status_nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @php
                        $smallBoxData = [
                            ['color' => 'info', 'value' => 150, 'text' => 'PTP', 'icon' => 'ion-bag'],
                            ['color' => 'success', 'value' => '53%', 'text' => 'PTK', 'icon' => 'ion-stats-bars'],
                            ['color' => 'warning', 'value' => 44, 'text' => 'PTUP', 'icon' => 'ion-person-add'],
                            ['color' => 'danger', 'value' => 65, 'text' => 'PMP', 'icon' => 'ion-pie-graph'],
                            ['color' => 'primary', 'value' => 23, 'text' => 'PMK', 'icon' => 'ion-android-contacts'],
                            ['color' => 'secondary', 'value' => 47, 'text' => 'PMUP', 'icon' => 'ion-android-globe'],
                            ['color' => 'dark', 'value' => 88, 'text' => 'PTUD', 'icon' => 'ion-android-home'],
                        ];
                    @endphp

                    @foreach($smallBoxData as $index => $box)
                        <div class="col-lg-3 col-6 mb-3">
                            <div class="small-box bg-{{ $box['color'] }}" style="height: 100px;">
                                <div class="inner" style="padding: 10px;">
                                    <h3 style="font-size: 1.5rem;">{{ $box['value'] }}</h3>
                                    <p style="font-size: 0.9rem;">{{ $box['text'] }}</p>
                                </div>
                                <div class="icon" style="top: 10px; font-size: 1.5rem;">
                                    <i class="ion {{ $box['icon'] }}"></i>
                                </div>
                                <a href="#" class="small-box-footer" style="padding: 5px;">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold">Usulan Penelitian</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Skema</th>
                                    <th>Anggota</th>
                                    <th>Tahun</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usulanPenelitian as $item)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $item->usulan_judul }}</td>
                                                                    <td>{{ $item->skema->trx_skema_nama }}</td>
                                                                    {{ $output = '' }}
                                                                    @foreach ($item->anggotaDosen as $dsn)
                                                                                                    @php
                                                                                                        $output .= $dsn->dosen->dosen_nama . ', ';
                                                                                                    @endphp
                                                                    @endforeach
                                                                    @php
                                                                        $output = rtrim($output, ', ')
                                                                    @endphp
                                                                    <td>{{ $output }}</td>
                                                                    <td>{{ $item->skema->periode_tahun }}</td>
                                                                    <td>{{ $item->tahapReview->status->status_nama }}</td>
                                                                    <td>
                                                                        <div class="flex items-col">
                                                                            <a href="{{ route('usulan-penelitian.show', $item->usulan_id) }}"
                                                                                class="btn btn-block btn-sm btn-outline-info mr-2">
                                                                                <i class="fas fa-eye"></i>
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
</section>
@endsection

@push('js')
    <script>
        document.getElementById('filter-form').addEventListener('submit', function (event) {
            var inputs = this.querySelectorAll('input[name]');
            inputs.forEach(function (input) {
                if (!input.value) {
                    input.name = ''; // Remove name attribute if the input is empty
                }
            });
        });
    </script>
@endpush