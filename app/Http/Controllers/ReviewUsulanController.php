<?php

namespace App\Http\Controllers;

use App\Models\ReviewUsulan;
use App\Models\UsulanReviewer;
use App\Models\UsulanPenelitian;
use App\Models\ReviewUsulanNilai;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewUsulanController extends Controller
{
    public function index(): View
    {
        $email_users = auth()->user()->email;
        $reviewUsulan = UsulanReviewer::select('trx_usulan_reviewer.*', 'trx_usulan.*')
            ->join('trx_usulan', 'trx_usulan.usulan_id', '=', 'trx_usulan_reviewer.usulan_id')
            ->join('ref_dosen', 'trx_usulan_reviewer.dosen_id', '=', 'ref_dosen.dosen_id')
            ->join('users', 'ref_dosen.dosen_email_polines', '=', 'users.email')
            ->where('users.email', '=', $email_users)
            ->get();
        
        return view('review_usulan.index', compact('reviewUsulan'));
    }

    public function show($id)
    {
        $usulanPenelitian = UsulanPenelitian::with([
            'skema', 
            'usulanLuaranWajib.luaranWajib', 
            'usulanLuaranTambahan.luaranTambahan', 
            'usulanIKU.iku', 
            'anggotaDosen.dosen', 
            'anggotaMahasiswa.mahasiswa', 
            'anggotaDosenLuar.dosen', 
            'usulanPendanaan.pendanaan', 
            'usulanFile.skemaFile',
            'reviews.nilai',
        ])->findOrFail($id);
    
        // Mengambil data yang diperlukan untuk Data Penilaian
        $skemaNama = $usulanPenelitian->skema->trx_skema_nama;
        $usulanJudul = $usulanPenelitian->usulan_judul;
        $usulanAbstrak = $usulanPenelitian->usulan_abstrak;
    
        // Mengambil data yang diperlukan untuk Anggota
        $anggotaDosen = $usulanPenelitian->anggotaDosen->pluck('dosen.dosen_nama')->implode(', ');
        $prodiDosen = $usulanPenelitian->anggotaDosen->pluck('dosen.prodi.prodi_nama')->implode(', ');
        $anggotaDosenLuar = $usulanPenelitian->anggotaDosenLuar->pluck('dosen_nama')->implode(', ');
        $anggotaMahasiswa = $usulanPenelitian->anggotaMahasiswa->pluck('mahasiswa.mhs_nama')->implode(', ');
        $prodiMahasiswa = $usulanPenelitian->anggotaMahasiswa->pluck('mahasiswa.prodi.prodi_nama')->implode(', ');
    
        // Mengambil data yang diperlukan untuk Capaian
        $luaranWajib = $usulanPenelitian->usulanLuaranWajib->pluck('luaranWajib.luaran_wajib_nama')->implode(', '); // Ubah menjadi string karena dapat memiliki banyak luaran
        $luaranTambahan = $usulanPenelitian->usulanLuaranTambahan->pluck('luaranTambahan.luaran_tambahan_nama')->implode(', '); // Ubah menjadi string karena dapat memiliki banyak luaran
        $iku = $usulanPenelitian->usulanIKU->pluck('iku.iku_nama')->implode(', '); // Ubah menjadi string karena dapat memiliki banyak iku
    
        // Mengambil data yang diperlukan untuk Komponen Pendanaan
        $pendanaan = $usulanPenelitian->usulanPendanaan->pluck('pendanaan.pendanaan_nama')->implode(', ');
    
        // Mengambil data yang diperlukan untuk Berkas Usulan
        $file = $usulanPenelitian->usulanFile->pluck('skemaFile.file_template')->implode(', ');
    
        // Mengambil data yang diperlukan untuk Review Usulan
        $email_users = auth()->user()->email;
        $reviewUsulan = ReviewUsulan::with(['nilai'])
            ->where('tahap_review_id', '=', $id)
            // ->whereHas('dosen', function($query) use ($email_users) {
            //     $query->where('dosen_email_polines', '=', $email_users);
            // })
            ->get();
    
        // Meneruskan data ke view
        return view('review_usulan.show', compact(
            'usulanPenelitian',
            'skemaNama', 
            'usulanJudul', 
            'usulanAbstrak', 
            'anggotaDosen', 
            'anggotaDosenLuar', 
            'anggotaMahasiswa',
            'prodiDosen',
            'prodiMahasiswa',
            'luaranWajib', 
            'luaranTambahan',   
            'iku', 
            'pendanaan', 
            'file', 
            'reviewUsulan'
        ));
    }

    public function update(Request $request, $id)
    {

        // dd($request->all());
       $validated = $request->validate([
            'usulan_reviewer_id' => 'required|exists:trx_usulan_reviewer,usulan_reviewer_id',
            'kriteria_id.*' => 'required|integer|exists:ref_kriteria_penilaian,kriteria_id',
            'nilai_id.*' => 'required|integer|min:0|max:5',
            'komentar' => 'nullable|string',
        ]);

        DB::transaction(function () use ($request) {
            $usulanReviewerId = $request->input('usulan_reviewer_id');



            foreach ($request->input('kriteria_id') as $key => $kriteriaId) {
                $check = ReviewUsulanNilai::where('kriteria_id', $kriteriaId)->where('usulan_reviewer_id', $request->input('usulan_reviewer_id'))->first();
                if(!$check) {
                    ReviewUsulanNilai::create([
                        'usulan_reviewer_id' => $usulanReviewerId,
                        'kriteria_id' => $kriteriaId,
                        'nilai_id' => $request->input('nilai_id')[$key],
                    ]);
                } else {
                    ReviewUsulanNilai::where('reviewer_nilai_id', $check->reviewer_nilai_id)->update([  
                        'nilai_id' => $request->input('nilai_id')[$key],
                    ]);
                }
            }

            $usulanReviewer = UsulanReviewer::find($usulanReviewerId);
            $existingComment = $usulanReviewer->reviewer_komentar;
            if ($request->filled('komentar') || $existingComment === null) {
                $usulanReviewer->reviewer_komentar = $request->input('komentar');
            } else {
                $request->merge(['komentar' => $existingComment]);
            }
            $usulanReviewer->save();
        });
        
        return redirect()->route('review-usulan.update', $id)->with('success', 'Penilaian berhasil disimpan.');
    }

}
