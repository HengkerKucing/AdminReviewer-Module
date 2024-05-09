@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 text-uppercase">
                <h4 class="m-0">Edit Pendanaan</h4>
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
                            <a href="{{ route('skema-pendanaan.index', $trx_skema_id) }}" class="btn btn-tool"><i
                                    class="fas fa-arrow-alt-circle-left"></i> </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('skema-pendanaan.update', ['trx_skema_id' => $trx_skema_id, 'skema_pendanaan' => $pendanaan_id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="pendanaan_key">Key</label>
                                <input type="text" name="pendanaan_key" id="pendanaan_key"
                                    class="form-control @error('pendanaan_key') is-invalid @enderror"
                                    value="{{ $pendanaan->pendanaan_key }}">
                                @error('pendanaan_key')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pendanaan_nama">Nama</label>
                                <input type="text" name="pendanaan_nama" id="pendanaan_nama"
                                    class="form-control @error('pendanaan_nama') is-invalid @enderror"
                                    value="{{ $pendanaan->pendanaan_nama }}">
                                @error('pendanaan_nama')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pendanaan_keterangan">Keterangan</label>
                                <input type="text" name="pendanaan_keterangan" id="pendanaan_keterangan"
                                    class="form-control @error('pendanaan_keterangan') is-invalid @enderror"
                                    value="{{ $pendanaan->pendanaan_keterangan }}">
                                @error('pendanaan_keterangan')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pendanaan_persentase">Persentase</label>
                                <input type="text" name="pendanaan_persentase" id="pendanaan_persentase"
                                    class="form-control @error('pendanaan_persentase') is-invalid @enderror"
                                    value="{{ $pendanaan->pendanaan_persentase }}">
                                @error('pendanaan_persentase')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="is_active">Aktif?</label>
                                <select name="is_active" id="is_active"
                                    class="form-control @error('is_active') is-invalid @enderror">
                                    <option value="1" {{ $pendanaan->is_active ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ !$pendanaan->is_active ? 'selected' : '' }}>Tidak</option>
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
