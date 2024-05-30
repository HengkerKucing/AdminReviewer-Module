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
                    <h4 class="m-0">Review Usulan</h4>
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
                        <table id="datatable-main" class="table table-bordered table-striped ">
                                <thead>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Skema</th>
                                    <th>Anggota</th>
                                    <th>Tahun</th>
                                    <th>Tahap</th>
                                    <th>Detail</th>
                                </thead>
                                <tbody>
                                @foreach ($reviewUsulan as $review)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $review->usulan_judul }}</td>
                                            <td>{{ $review->skema->trx_skema_nama }}</td>
                                            {{ $output = '' }}
                                            @foreach ($review->anggotaMahasiswa as $mhs)
                                                @php
                                                    $output .= $mhs->mahasiswa->mhs_nama . ', ';
                                                @endphp
                                            @endforeach
                                            @php
                                                $output = rtrim($output, ', ')
                                            @endphp
                                            <td>{{ $output }}</td>
                                            <td>{{ $review->skema->periode_tahun }}</td>
                                            <td>{{ $review->tahapReview->tahap_review_nama }}</td>
                                            <td>
                                                <div class="flex itemyyys-col">
                                                <a href="{{ route('review-usulan.show', $review->usulan_id) }}" class="btn btn-block btn-sm btn-outline-info mr-2">
                                                    <i class="fas fa-eye"></i>
                                                </a>
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