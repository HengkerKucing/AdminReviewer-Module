@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 text-uppercase">
                <h4 class="m-0">Edit Skema</h4>
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
                            <a href="{{ route('ref-skema.index') }}" class="btn btn-sm btn-secondary"><i
                                    class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ref-skema.update', $skema->trx_skema_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="trx_skema_nama">Nama Skema</label>
                                <input type="text" name="trx_skema_nama" id="trx_skema_nama"
                                    class="form-control @error('trx_skema_nama') is-invalid @enderror"
                                    value="{{ $skema->trx_skema_nama }}">
                                @error('trx_skema_nama')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="trx_skema_kode">Kode Skema</label>
                                <input type="text" name="trx_skema_kode" id="trx_skema_kode"
                                    class="form-control @error('trx_skema_kode') is-invalid @enderror"
                                    value="{{ $skema->trx_skema_kode }}">
                                @error('trx_skema_kode')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="periode_tahun">Periode Tahun</label>
                                <input type="text" name="periode_tahun" id="periode_tahun"
                                    class="form-control @error('periode_tahun') is-invalid @enderror"
                                    value="{{ $skema->periode_tahun }}">
                                @error('periode_tahun')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="is_active">Aktif?</label>
                                <select name="is_active" id="is_active"
                                    class="form-control @error('is_active') is-invalid @enderror">
                                    <option value="1" {{ $skema->is_active ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ !$skema->is_active ? 'selected' : '' }}>Tidak</option>
                                </select>
                                @error('is_active')
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
