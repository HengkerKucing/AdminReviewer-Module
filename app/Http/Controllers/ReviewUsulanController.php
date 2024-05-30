<?php

namespace App\Http\Controllers;

use App\Models\ReviewUsulan;
use App\Models\UsulanReviewer;
use App\Models\ReviewUsulanNilai;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ReviewUsulanController extends Controller
{
    public function index(): View
    {

        $email_users = auth()->user()->email;
        $reviewUsulan = UsulanReviewer::select('trx_usulan_reviewer.*','trx_usulan.*')
            ->join('trx_usulan', 'trx_usulan.usulan_id', '=', 'trx_usulan_reviewer.usulan_id')
            ->join('ref_dosen', 'trx_usulan_reviewer.dosen_id', '=', 'ref_dosen.dosen_id')
            ->join('users', 'ref_dosen.dosen_email_polines', '=', 'users.email')
            ->where('users.email', '=', $email_users)
            ->get();
        return view('review_usulan.index', compact('reviewUsulan'));
    }

    public function show($id)
    {
        $reviewUsulan = ReviewUsulan::all()->where("tahap_review_id", '=', $id);
        
        return view('review_usulan.show', compact('reviewUsulan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'usulan_reviewer_id' => 'required|exists:usulan_reviewer,id',
            'kriteria_id.*' => 'required|integer|exists:kriteria,id',
            'nilai.*' => 'required|integer|min:0|max:5',
        ]);

        // Proses penyimpanan data
        foreach ($request->input('kriteria_id') as $key => $kriteriaId) {
            ReviewUsulanNilai::create([
                'usulan_reviewer_id' => $request->input('usulan_reviewer_id'),
                'kriteria_id' => $kriteriaId,
                'nilai' => $request->input('nilai')[$key],
            ]);
        }

        // Redirect atau berikan respons sesuai kebutuhan aplikasi
        return redirect()->back()->with('success', 'Penilaian berhasil disimpan.');
        // // Validasi input jika diperlukan
        // $request->validate([
        //     'nilai.*' => 'required|integer|min:0|max:5', // Sesuaikan dengan aturan validasi yang diperlukan
        //     'total_nilai' => 'required|numeric',
        //     'komentar' => 'nullable|string',
        // ]);

        // // Proses penyimpanan data
        // // Misalnya, simpan ke dalam database
        // foreach ($request->input('nilai') as $key => $nilai) {
        //     $reviewUsulan = new ReviewUsulan(); // Sesuaikan dengan model dan tabel yang digunakan
        //     $reviewUsulan->kriteria_id = $key + 1; // ID kriteria, diasumsikan dimulai dari 1
        //     $reviewUsulan->nilai = $nilai;
        //     $reviewUsulan->save();
        // }

        // // Redirect atau berikan respons sesuai kebutuhan aplikasi
        // return redirect()->back()->with('success', 'Penilaian berhasil disimpan.');

    }
}
