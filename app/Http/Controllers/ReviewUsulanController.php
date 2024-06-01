<?php

namespace App\Http\Controllers;

use App\Models\ReviewUsulan;
use App\Models\UsulanReviewer;
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
        $reviewUsulan = ReviewUsulan::with(['nilai'])->where("tahap_review_id", '=', $id)->get();
        
        
        return view('review_usulan.show', compact('reviewUsulan'));
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
        $usulanReviewer->reviewer_komentar = $request->input('komentar');
        $usulanReviewer->save();
    });

    return redirect()->route('review-usulan.update', $id)->with('success', 'Penilaian berhasil disimpan.');
}

}
