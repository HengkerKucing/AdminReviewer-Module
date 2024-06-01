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
                            <option value="0" >0</option>
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
        <textarea name="komentar" class="form-control @error('reviewer_komentar')is-invalid @enderror" 
        rows="3" placeholder="Tambahkan komentar"></textarea>
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
