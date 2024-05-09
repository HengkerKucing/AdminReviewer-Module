@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 text-uppercase">
                <h4 class="m-0">Edit Skema File</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right"></ol>
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
                            <a href="{{ route('skema-file.index', $skemafile->trx_skema_id)}}" class="btn btn-sm btn-secondary"><i
                                    class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('skema-file.update', ["trx_skema_id"=>$trx_skema_id, "skema_file"=> $id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="file_caption">Nama Skema File</label>
                                <input type="text" name="file_caption" id="file_caption"
                                    class="form-control @error('file_caption') is-invalid @enderror"
                                    value="{{ $skemafile->file_caption }}">
                                @error('file_caption')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="file_accepted_type">Kode Skema</label>
                                <input type="text" name="file_accepted_type" id="file_accepted_type"
                                    class="form-control @error('file_accepted_type') is-invalid @enderror"
                                    value="{{ $skemafile->file_accepted_type }}">
                                @error('file_accepted_type')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="file_template">Upload File</label>
                                <input type="file" name="file_template" id="file_template"
                                    class="form-control @error('file_template') is-invalid @enderror"
                                    value="{{ $skemafile->file_template }}">
                                @error('file_template')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
