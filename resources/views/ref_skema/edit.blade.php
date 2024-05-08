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
                            <a href="{{ route('ref-skema.index') }}" class="btn btn-tool"><i
                                    class="fas fa-arrow-alt-circle-left"></i> </a>
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
                                <label for="jenis_skema_id">Jenis Skema</label>
                                <input type="text" name="jenis_skema_id" id="jenis_skema_id"
                                    class="form-control @error('jenis_skema_id') is-invalid @enderror"
                                    value="{{ $skema->jenis_skema_id }}">
                                @error('jenis_skema_id')
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
                                <label for="proposal_max_upload">Maksimal Upload Proposal</label>
                                <input type="date" name="proposal_max_upload" id="proposal_max_upload"
                                    class="form-control @error('proposal_max_upload') is-invalid @enderror"
                                    value="{{ $skema->proposal_max_upload }}">
                                @error('proposal_max_upload')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="revisi_proposal_max_upload">Maksimal Upload Revisi Proposal</label>
                                <input type="date" name="revisi_proposal_max_upload" id="revisi_proposal_max_upload"
                                    class="form-control @error('revisi_proposal_max_upload') is-invalid @enderror"
                                    value="{{ $skema->revisi_proposal_max_upload }}">
                                @error('revisi_proposal_max_upload')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="laporan_kemajuan_max_upload">Maksimal Upload Laporan Kemajuan</label>
                                <input type="date" name="laporan_kemajuan_max_upload" id="laporan_kemajuan_max_upload"
                                    class="form-control @error('laporan_kemajuan_max_upload') is-invalid @enderror"
                                    value="{{ $skema->laporan_kemajuan_max_upload }}">
                                @error('laporan_kemajuan_max_upload')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="laporan_akhir_max_upload">Maksimal Upload Laporan Akhir</label>
                                <input type="date" name="laporan_akhir_max_upload" id="laporan_akhir_max_upload"
                                    class="form-control @error('laporan_akhir_max_upload') is-invalid @enderror"
                                    value="{{ $skema->laporan_akhir_max_upload }}">
                                @error('laporan_akhir_max_upload')
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
