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
                    <h4 class="m-0">www</h4>
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
                        <!-- resources/views/ref-skema-file/update.blade.php -->
                            <form action="{{ route('ref_skema_file.update', ['id' => $skemafile->id]) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <label for="file_caption">File Caption:</label>
                                <input type="text" name="file_caption" value="{{ $skemafile->file_caption }}" required>

                                <label for="file_accepted_type">File Accepted Type:</label>
                                <input type="text" name="file_accepted_type" value="{{ $skemafile->file_accepted_type }}" required>

                                <button type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Styling -->
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
        <!-- End Styling -->
    </div>
    </div>
@endsection
@push('js')
@endpush