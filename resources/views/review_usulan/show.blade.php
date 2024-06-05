@extends('layouts.app')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 text-uppercase">
                <h4 class="m-0">Review Usulan</h4>
            </div>
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                        {{-- Tambahkan breadcrumb jika diperlukan --}}
                    </ol> -->
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- Data Penelitian Section -->
            <div class="col-md-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5>Data Penelitian</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-4 font-weight-bold">Skema:</div>
                            <div class="col-md-8">{{ $skemaNama }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 font-weight-bold">Judul:</div>
                            <div class="col-md-8">{{ $usulanJudul }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 font-weight-bold">Abstrak:</div>
                            <div class="col-md-8">{{ $usulanAbstrak }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Anggota Section -->
            <div class="col-md-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5>Anggota</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="font-weight-bold">Dosen</div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Program Studi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usulanPenelitian->anggotaDosen as $anggota)
                                            <tr>
                                                <td>{{ $anggota->dosen->dosen_nama }}</td>
                                                <td>{{ $anggota->dosen->prodi->prodi_nama }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="font-weight-bold">Mahasiswa</div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Program Studi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usulanPenelitian->anggotaMahasiswa as $anggota)
                                            <tr>
                                                <td>{{ $anggota->mahasiswa->mhs_nama }}</td>
                                                <td>{{ $anggota->mahasiswa->prodi->prodi_nama }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Capaian Section -->
            <div class="col-md-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5>Capaian</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-3 font-weight-bold">Luaran Wajib</div>
                            <div class="col-md-9">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Jenis Luaran Wajib</th>
                                            <th>Luaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usulanPenelitian->usulanLuaranWajib as $usulan)
                                            <tr>
                                                <td>{{ $usulan->luaranWajib->luaran_wajib_nama }}</td>
                                                <td>{{ $usulan->luaranWajib->luaran_wajib_slug }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3 font-weight-bold">Luaran Tambahan</div>
                            <div class="col-md-9">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Jenis Luaran Tambahan</th>
                                            <th>Luaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usulanPenelitian->usulanLuaranTambahan as $usulan)
                                            <tr>
                                                <td>{{ $usulan->luaranTambahan->luaran_tambahan_nama }}</td>
                                                <td>{{ $usulan->luaranTambahan->luaran_tambahan_slug }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3 font-weight-bold">IKU</div>
                            <div class="col-md-9">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>IKU</th>
                                            <th>Target Pengusul</th>
                                            <th>Bukti</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usulanPenelitian->usulanIKU as $usulan)
                                            <tr>
                                                <td>{{ $usulan->iku->iku_nama }}</td>
                                                <td>{{ $usulan->iku->iku_target }}</td>
                                                <td>{{ $usulan->iku_bukti }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Komponen Pendanaan Section -->
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5>Komponen Pendanaan</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $totalPendanaan = 0;
                                        @endphp
                                        <tr>
                                            @foreach ($usulanPenelitian->usulanPendanaan as $pendanaan)
                                                <tr>
                                                    <td>{{ $pendanaan->pendanaan->pendanaan_nama . ' (Maks. ' . $pendanaan->pendanaan->pendanaan_persentase . '%)' }}</td>
                                                    <td>{{ 'Rp ' . number_format($pendanaan->pendanaan_value, 0, ',', '.') }}</td>
                                                </tr>
                                                @php
                                                    $totalPendanaan += $pendanaan->pendanaan_value;
                                                @endphp
                                            @endforeach
                                        <tr>
                                            <td>Total Pendanaan</td>
                                            <td>{{ 'Rp ' . number_format($totalPendanaan, 0, ',', '.') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Berkas Usulan Section -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5>Berkas Usulan</h5>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Berkas</th>
                                            <th>Lihat Berkas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usulanPenelitian->usulanFile as $usulan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $usulan->skemaFile->file_caption }}</td>
                                                <td>
                                                    @if ($usulan->file_path)
                                                        <!-- Asumsikan file_path adalah atribut yang menunjukkan apakah file telah diunggah -->
                                                        <a href="{{ asset('storage/' . $usulan->file_path) }}" target="_blank" class="btn btn-primary">
                                                            <i class="fas fa-eye"></i> Lihat File
                                                        </a>
                                                    @else
                                                        <!-- <span class="text-danger">Belum diunggah</span> -->
                                                        <button class="btn btn-danger" disabled>Belum diunggah</button>
                                                    @endif
                                                </td>
                                                <!-- <td>{{ $usulan->skemaFile->file_template }}</td> -->
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5>Penilaian Usulan</h5>
                        </div>
                        <div class="card-body">
                            <!-- Form Start -->
                            <form action="{{ route('review-usulan.update', $reviewUsulan[0]->tahap_review_id) }}" method="POST">
                                @csrf
                                @method('put')
                                <input type="hidden" value="{{auth()->user()->id}}" name="usulan_reviewer_id">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $item)
                                        <div class="alert alert-danger">
                                            {{$item}}
                                        </div>
                                    @endforeach
                                @endif
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <th>No</th>
                                        <th>Kriteria</th>
                                        <th>Bobot</th>
                                        <th>Nilai</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($reviewUsulan as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->kriteria_nama }}</td>
                                                <td class="kriteria-bobot">{{ $item->kriteria_bobot }}</td>
                                                <td>
                                                    <input type="hidden" name="kriteria_id[]" value="{{$item->kriteria_id}}">
                                                    @if ($item->nilai)
                                                        <select name="nilai_id[]" class="form-control nilai-select">
                                                            <option value="0" @if ($item->nilai->nilai_id == 0) selected  @endif>0</option>
                                                            <option value="1" @if ($item->nilai->nilai_id == 1) selected  @endif>1</option>
                                                            <option value="2" @if ($item->nilai->nilai_id == 2) selected  @endif>2</option>
                                                            <option value="3" @if ($item->nilai->nilai_id == 3) selected  @endif>3</option>
                                                            <option value="4" @if ($item->nilai->nilai_id == 4) selected  @endif>4</option>
                                                            <option value="5" @if ($item->nilai->nilai_id == 5) selected  @endif>5</option>
                                                        </select>
                                                    @else
                                                        <select name="nilai_id[]" class="form-control nilai-select">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3">Total Penilaian:</th>
                                            <td id="total-nilai">0</td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!-- Komentar start -->
                                <div class="form-group">
                                    @if (!empty($usulanReviewer->reviewer_komentar))
                                        <textarea name="komentar" class="form-control @error('komentar') is-invalid @enderror" 
                                        rows="3" placeholder="Tambahkan komentar">{{ $usulanReviewer->reviewer_komentar }}</textarea>
                                    @else
                                        <textarea name="komentar" class="form-control @error('komentar') is-invalid @enderror" 
                                        rows="3" placeholder="Tambahkan komentar">{{ old('komentar') }}</textarea>
                                    @endif
                                    @error('komentar')
                                        <div class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-between">
                                <!-- Komentar end -->
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                    <button type="button" class="btn btn-secondary" onclick="window.history.back();"><i class="fas fa-arrow-left"></i> Kembali</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var selects = document.querySelectorAll('.nilai-select');
            var totalNilaiInput = document.getElementById('total-nilai');

            function calculateTotal() {
                var total = 0;
                selects.forEach(function (select) {
                    var nilai = parseInt(select.value);
                    var bobot = parseFloat(select.closest('tr').querySelector('.kriteria-bobot').textContent);
                    total += nilai * bobot;
                });
                totalNilaiInput.textContent = total;
            }

            selects.forEach(function (select) {
                select.addEventListener('change', calculateTotal);
            });

            calculateTotal();
        });
    </script>
@endpush

@push('styles')
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
@endpush
@endsection
