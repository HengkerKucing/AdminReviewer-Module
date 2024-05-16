<?php

namespace App\Http\Controllers;

use App\Models\PlottingReviewer;

class PlottingReviewerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $plotting_reviewer = PlottingReviewer::with('usulan', 'skema','tahapreview.status','UsulanAnggotaMhs.mahasiswa')->get();
        return view('plotting_reviewer.index', compact("plotting_reviewer"));
    }
}
