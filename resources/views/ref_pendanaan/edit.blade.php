@extends('layouts.app')
@push('css')
<!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('') }}plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('ref_pendanaan.update', $pendanaans->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Pendanaan</label>
                                <input type="text" class="form-control @error('pendanaan_nama') is-invalid @enderror" name="pendanaan_nama" value="{{ old('pendanaan_nama', $pendanaan->pendanaan_nama) }}" placeholder="Masukkan Nama Pendanaan">

                                <!-- error message untuk pendanaan_nama -->
                                @error('pendanaan_nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Keterangan Pendanaan</label>
                                <input type="text" class="form-control @error('pendanaan_keterangan') is-invalid @enderror" name="pendanaan_keterangan" value="{{ old('pendanaan_keterangan', $pendanaan->pendanaan_keterangan) }}" placeholder="Masukkan Keterangan Pendanaan">

                                <!-- error message untuk pendanaan_keterangan -->
                                @error('pendanaan_keterangan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Persentase Pendanaan</label>
                                <input type="text" class="form-control @error('pendanaan_persentase') is-invalid @enderror" name="pendanaan_persentase" value="{{ old('pendanaan_persentase', $pendanaan->pendanaan_persentase) }}" placeholder="Masukkan Persentase Pendanaan">

                                <!-- error message untuk pendanaan_persentase -->
                                @error('pendanaan_persentase')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection
@push('js')
@endpush