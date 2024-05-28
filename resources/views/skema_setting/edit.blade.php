@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 text-uppercase">
                <h4 class="m-0">Edit Skema Setting</h4>
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
                            <a href="{{ route('skema-setting.index', $skemasetting->trx_skema_id)}}" class="btn btn-sm btn-secondary"><i
                                    class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <form action="{{ route('skema-setting.update', ["trx_skema_id"=>$trx_skema_id, "skema_setting"=> $id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="setting_label">Nama Skema Setting</label>
                                <input type="text" name="setting_label" id="setting_label"
                                    class="form-control @error('setting_label') is-invalid @enderror"
                                    value="{{ $skemasetting->setting_label }}">
                                @error('setting_label')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="setting_value">Setting Value</label>
                                <input type="text" name="setting_value" id="setting_value"
                                    class="form-control @error('setting_value') is-invalid @enderror"
                                    value="{{ $skemasetting->setting_value }}">
                                @error('setting_value')
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
