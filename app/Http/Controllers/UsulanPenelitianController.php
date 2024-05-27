<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use App\Models\Status;
use App\Models\UsulanPenelitian;
use Illuminate\Http\Request;

class UsulanPenelitianController extends Controller
{
    public function index(Request $request)
    {
        $usulanPenelitian = UsulanPenelitian::with('skema', 'anggotaDosen.dosen', 'anggotaMahasiswa.mahasiswa', 'tahapReview.status')->get();

        $usulanPenelitian = UsulanPenelitian::query();

        // filter judul usulan
        if ($request->has('judul') && !empty($request->input('judul'))) {
            $judul = $request->input('judul');
            $usulanPenelitian->where('usulan_judul', 'like', '%' . $judul . '%');
        }

        // filter nama skema
        if ($request->has('skema_nama') && !empty($request->input('skema_nama'))) {
            $skema = $request->input('skema_nama');
            $usulanPenelitian->whereHas('skema', function ($query) use ($skema) {
                $query->where('trx_skema_nama', 'like', '%' . $skema . '%');
            });
        }

        // filter nama anggota dosen dan mahasiswa
        if ($request->has('anggota') && !empty($request->input('anggota'))) {
            $anggota = $request->input('anggota');
            $usulanPenelitian->where(function ($query) use ($anggota) {
                $query->whereHas('anggotaDosen.dosen', function ($query) use ($anggota) {
                    $query->where('dosen_nama', 'like', '%' . $anggota . '%');
                })->orWhereHas('anggotaMahasiswa.mahasiswa', function ($query) use ($anggota) {
                    $query->where('mhs_nama', 'like', '%' . $anggota . '%');
                });
            });
        }

        // filter status
        if ($request->has('status_nama') && !empty($request->input('status_nama'))) {
            $status = $request->input('status_nama');
            $usulanPenelitian->whereHas('tahapReview.status', function ($query) use ($status) {
                $query->where('status_nama', 'like', '%' . $status . '%');
            });
        }

        $usulanPenelitian = $usulanPenelitian->get();

        // Mengambil semua judul usulan berdasarkan filter
        $usulans = UsulanPenelitian::all();

        // Mengambil semua nama skema berdasarkan filter
        $skemas = Skema::all();

        // Mengambil semua status berdasarkan filter
        $statuses = Status::all();

        // dd($usulanPenelitian);
        return view('usulan_penelitian.index', compact('usulanPenelitian', 'skemas', 'statuses'));
    }

    public function show($usulan_id)
    {
        // Mengambil data usulan penelitian beserta hubungan yang terkait
        $usulanPenelitian = UsulanPenelitian::with([
            'skema', 
            'luaranWajib', 
            'luaranTambahan', 
            'iku', 
            'anggotaDosen.dosen', 
            'anggotaMahasiswa.mahasiswa',
            'anggotaDosenLuar.dosen',
        ])->findOrFail($usulan_id);
    
        // Mengambil data yang diperlukan untuk Data Penilaian
        $skemaNama = $usulanPenelitian->skema->trx_skema_nama ?? 'N/A';
        $usulanJudul = $usulanPenelitian->usulan_judul;
        $usulanAbstrak = $usulanPenelitian->usulan_abstrak;

        // Mengambil data yang diperlukan untuk Capaian
        $luaranWajib = $usulanPenelitian->luaranWajib->pluck('luaran_wajib_nama')->implode(', '); // Ubah menjadi string karena dapat memiliki banyak luaran
        $luaranTambahan = $usulanPenelitian->luaranTambahan->pluck('luaran_tambahan_nama')->implode(', '); // Ubah menjadi string karena dapat memiliki banyak luaran
        $iku = $usulanPenelitian->iku->iku_nama;

        // Mengambil data yang diperlukan untuk Anggota
        $anggotaDosen = $usulanPenelitian->anggotaDosen->pluck('dosen.dosen_nama')->implode(', ');
        $prodiDosen = $usulanPenelitian->anggotaDosen->pluck('dosen.prodi.prodi_nama')->implode(', ');
        $anggotaDosenLuar = $usulanPenelitian->anggotaDosenLuar->pluck('dosen_nama')->implode(', ');
        $anggotaMahasiswa = $usulanPenelitian->anggotaMahasiswa->pluck('mahasiswa.mhs_nama')->implode(', ');
        $prodiMahasiswa = $usulanPenelitian->anggotaMahasiswa->pluck('mahasiswa.prodi.prodi_nama')->implode(', ');
    
        // Meneruskan data ke view
        return view('usulan_penelitian.show', compact(
            'usulanPenelitian',
            'skemaNama', 
            'usulanJudul', 
            'usulanAbstrak', 
            'luaranWajib', 
            'luaranTambahan',   
            'iku', 
            'anggotaDosen', 
            'anggotaDosenLuar', 
            'anggotaMahasiswa',
            'prodiDosen',
            'prodiMahasiswa'
        ));
    }

}