@extends('layouts.app')
@push('css')
@endpush
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 text-uppercase">
                    <h4 class="m-0">Tambah Pendanaan</h4>
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
                                <a href="{{ route('skema-pendanaan.index', $trx_skema_id) }}" class="btn btn-tool"><i
                                        class="fas fa-arrow-alt-circle-left"></i></a>
                            </div>
                        </div>
                        <form action="{{ route('skema-pendanaan.store', $trx_skema_id) }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Key</label>
                                    <input type="text" name="pendanaan_key"
                                        class="form-control @error('pendanaan_key') is-invalid @enderror"
                                        placeholder="Key Pendanaan">
                                    @error('pendanaan_key')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="pendanaan_nama"
                                        class="form-control @error('pendanaan_nama') is-invalid @enderror"
                                        placeholder="Nama Pendanaan">
                                    @error('pendanaan_nama')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="pendanaan_keterangan"
                                        class="form-control @error('pendanaan_keterangan') is-invalid @enderror "
                                        placeholder="Keterangan">
                                    @error('pendanaan_keterangan')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Persentase</label>
                                    <input type="text" name="pendanaan_persentase"
                                        class="form-control @error('pendanaan_persentase') is-invalid @enderror "
                                        placeholder="Persentase">
                                    @error('pendanaan_persentase')
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
