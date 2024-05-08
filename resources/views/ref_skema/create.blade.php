@extends('layouts.app')
@push('css')
@endpush
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 text-uppercase">
                    <h4 class="m-0">Tambah Skema</h4>
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
                            <h5 class="card-title m-0"></h5>
                            <div class="card-tools">
                                <a href="{{ route('ref-skema.index') }}" class="btn btn-tool"><i
                                        class="fas fa-arrow-alt-circle-left"></i></a>
                            </div>
                        </div>
                        <form action="{{ route('ref-skema.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Skema</label>
                                    <input type="text" name="trx_skema_nama"
                                        class="form-control @error('trx_skema_nama')is-invalid @enderror" placeholder="Nama Skema">
                                    @error('trx_skema_nama')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Kode Skema</label>
                                    <input type="text" name="trx_skema_kode"
                                        class="form-control @error('trx_skema_kode')is-invalid @enderror "
                                        placeholder="Kode Skema">
                                    @error('trx_skema_kode')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Jenis Skema</label>
                                    <input type="text" name="jenis_skema_id"
                                        class="form-control @error('jenis_skema_id')is-invalid @enderror "
                                        placeholder="Jenis Skema">
                                    @error('jenis_skema_id')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Periode Tahun</label>
                                    <input type="text" name="periode_tahun"
                                        class="form-control @error('periode_tahun')is-invalid @enderror "
                                        placeholder="Periode Tahun">
                                    @error('periode_tahun')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Maksimal Upload Proposal</label>
                                    <input type="date" name="proposal_max_upload"
                                        class="form-control @error('proposal_max_upload')is-invalid @enderror ">
                                    @error('proposal_max_upload')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Maksimal Upload Revisi Proposal</label>
                                    <input type="date" name="revisi_proposal_max_upload"
                                        class="form-control @error('revisi_proposal_max_upload')is-invalid @enderror ">
                                    @error('revisi_proposal_max_upload')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Maksimal Upload Laporan Kemajuan</label>
                                    <input type="date" name="laporan_kemajuan_max_upload"
                                        class="form-control @error('laporan_kemajuan_max_upload')is-invalid @enderror ">
                                    @error('laporan_kemajuan_max_upload')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Maksimal Upload Laporan Akhir</label>
                                    <input type="date" name="laporan_akhir_max_upload"
                                        class="form-control @error('laporan_akhir_max_upload')is-invalid @enderror ">
                                    @error('laporan_akhir_max_upload')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info btn-block btn-flat"><i class="fa fa-save"></i>
                                    Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('') }}plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script>
        $(function() {
            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })
        })
    </script>
@endpush
