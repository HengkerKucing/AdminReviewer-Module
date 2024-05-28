<?php

namespace App\Http\Controllers;

use App\Models\ReviewUsulan;
use App\Models\UsulanPenelitian;
use Illuminate\View\View;

// use Illuminate\Http\Request;

class ReviewUsulanController extends Controller
{
    public function index(): View
    {
        $reviewUsulan = UsulanPenelitian::with('skema', 'anggotaDosen.dosen', 'anggotaMahasiswa.mahasiswa', 'tahapReview.status')->get();

        return view('review_usulan.index', compact('reviewUsulan'));
    }

    public function show($id)
    {
        $reviewUsulan = ReviewUsulan::all()->where("tahap_review_id", '=', $id);
        // $usulan = Usulan::where('usulan_id', $usulan_id)->first();
        return view('review_usulan.show', compact('reviewUsulan'));
    }
}
