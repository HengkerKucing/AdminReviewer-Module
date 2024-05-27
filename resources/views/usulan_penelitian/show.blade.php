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
                <div class="col-sm-6 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
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
                                    <h6>Dosen</h6>
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
                                    <h6>Mahasiswa</h6>
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
                                <div class="col-md-12">
                                    <h6>Luaran Wajib</h6>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Jenis Luaran Wajib</th>
                                                <th>Luaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jurnal Nasional Terakreditasi</td>
                                                <td>{{ $luaranWajib }}</td>
                                            </tr>
                                            <tr>
                                                <td>Produk Iptek-Sosbud</td>
                                                <td>{{ $luaranTambahan }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <h6>Luaran Tambahan</h6>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Jenis Luaran Tambahan</th>
                                                <th>Luaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>HKI</td>
                                                <td>{{ $luaranTambahan }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <h6>IKU</h6>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>IKU</th>
                                                <th>Target Pengusul</th>
                                                <th>Bukti</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Publikasi Ilmiah (IK-2.01.02) Nasional Terakreditasi</td>
                                                <td>Jurnal nasional</td>
                                                <td>{{ $iku }}</td>
                                            </tr>
                                            <tr>
                                                <td>Pemakalah dalam pertemuan ilmiah (IK-2.01.02) Nasional</td>
                                                <td>{{ $iku }}</td>
                                                <td>{{ $iku }}</td>
                                            </tr>
                                            <tr>
                                                <td>Teknologi Tepat Guna (IK-2.01.03)</td>
                                                <td>tersedia</td>
                                                <td>{{ $iku }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Komponen Pendanaan Section -->
                <div class="col-md-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5>Komponen Pendanaan</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <h6>Komponen Pendanaan</h6>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Kategori</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Bahan habis pakai dan peralatan (Maks. 60%)</td>
                                                <td>Rp 6.500.000</td>
                                            </tr>
                                            <tr>
                                                <td>Perjalanan (Maks. 30%)</td>
                                                <td>Rp 1.000.000</td>
                                            </tr>
                                            <tr>
                                                <td>Lain-lain (Maks. 40%)</td>
                                                <td>Rp 4.500.000</td>
                                            </tr>
                                            <tr>
                                                <td>Total Pendanaan</td>
                                                <td>Rp 12.000.000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
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
                                <tr>
                                    <td>1</td>
                                    <td>Proposal</td>
                                    <td><button class="btn btn-success"> <i class="fa fa-eye"></i> </button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Rencana Anggaran Biaya (RAB)</td>
                                    <td><button class="btn btn-success"> <i class="fa fa-eye"></i> </button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Laporan Kemajuan</td>
                                    <td><button class="btn btn-danger">Belum Unggah</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Laporan Akhir</td>
                                    <td><button class="btn btn-danger">Belum Unggah</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
               
        </div>
    </div>

    <script>
        // JavaScript untuk menghitung total nilai
        document.addEventListener('DOMContentLoaded', function () {
            var selects = document.querySelectorAll('.nilai-select');
            var totalNilai = document.getElementById('total-nilai');

            selects.forEach(function (select) {
                select.addEventListener('change', function () {
                    var total = 0;
                    selects.forEach(function (select) {
                        total += parseInt(select.value);
                    });
                    totalNilai.textContent = total;
                });
            });
        });
    </script>

    <!-- Styling -->
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

@push('js')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <!-- Tambahkan script JavaScript jika diperlukan -->
    <script>
        $(document).ready(function () {
            $('#datatable-main').DataTable({
                "paging": false, // Nonaktifkan paging
                "pageLength": 5, // Batasi jumlah baris yang ditampilkan menjadi 5
                "pagingType": "numbers", // Menggunakan angka halaman
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": false, // Hapus "Showing 1 to 15 of X entries"
                "autoWidth": false,
                "responsive": true
            });
        });
    </script>
@endpush
