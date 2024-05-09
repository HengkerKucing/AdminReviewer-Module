@extends('layouts.app')
@push('css')
@endpush
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 text-uppercase">
                    <h4 class="m-0">Tambah Skema File</h4>
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
                            @if (!empty($trx_skema_id))
    <a href="{{ route('skema-file.index', ['trx_skema_id' => $trx_skema_id]) }}" class="btn btn-tool">
        <i class="fas fa-arrow-alt-circle-left"></i>
    </a>
@endif

                            </div>
                        </div>
                        <form action="{{ route('skema-file.store', $trx_skema_id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Skema File</label>
                                    <input type="text" name="file_caption"
                                        class="form-control @error('file_caption')is-invalid @enderror" placeholder="Nama Skema File">
                                    @error('file_caption')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Tipe File</label>
                                    <input type="text" name="file_accepted_type"
                                        class="form-control @error('file_accepted_type')is-invalid @enderror "
                                        placeholder="Kode Skema">
                                    @error('file_accepted_type')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>File Key</label>
                                    <input type="text" name="file_key"
                                        class="form-control @error('file_key')is-invalid @enderror "
                                        placeholder="Kode Skema">
                                    @error('file_key')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Upload File</label>
                                    <input type="file" name="file_template"
                                        class="form-control @error('file_template')is-invalid @enderror "
                                        placeholder="Kode Skema">
                                    @error('file_template')
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
