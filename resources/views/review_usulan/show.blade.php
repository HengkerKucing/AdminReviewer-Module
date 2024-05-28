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
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5>Penilaian Usulan</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Kriteria</th>
                                <th>Bobot</th>
                                <th>Nilai</th>
                            </thead>
                            <tbody>
                                @php
                                    $criteria = [
                                        'Rekam Jejak PTM',
                                        'Mutu Penelitian',
                                        'Kelayakan Penelitian',
                                        'Kesesuaian keahlian pengusul dengan program',
                                        'Pentingnya kerjasama penelitian'
                                    ];
                                @endphp
                                @foreach ($reviewUsulan as $item)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kriteria_nama }}</td>
                                        <td class="kriteria-bobot">{{ $item->kriteria_bobot }}</td>
                                        <td>
                                            <select name="nilai" class="nilai-select">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
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
                        <!-- Komentar -->
                        <div class="mt-3 mb-3">
                            <textarea class="form-control" rows="3" placeholder="Tambahkan komentar"></textarea>
                        </div>
                        <!-- Tombol Simpan dan Kembali -->
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                            <button type="button" class="btn btn-secondary" onclick="window.history.back();"><i
                                    class="fas fa-arrow-left"></i> Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript untuk menghitung total nilai dengan bobot
    document.addEventListener('DOMContentLoaded', function () {
        var selects = document.querySelectorAll('.nilai-select');
        var totalNilai = document.getElementById('total-nilai');

        function calculateTotal() {
            var total = 0;
            selects.forEach(function (select) {
                var nilai = parseInt(select.value);
                var bobot = parseFloat(select.closest('tr').querySelector('.kriteria-bobot').textContent);
                total += nilai * bobot;
            });
            totalNilai.textContent = total;
        }

        selects.forEach(function (select) {
            select.addEventListener('change', calculateTotal);
        });

        calculateTotal();
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