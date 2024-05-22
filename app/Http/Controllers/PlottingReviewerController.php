<?php

namespace App\Http\Controllers;

use App\Models\PlottingReviewer;
use App\Models\Dosen;
use App\Models\Usulan;

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
        $plotting_reviewer = Usulan::with("skema",'tahapreview.status','usulananggotamhs.mahasiswa')->get();
        return view('plotting_reviewer.index', compact("plotting_reviewer"));
    }

    public function show($id)
    {
        $show_plotting_reviewer = PlottingReviewer::with('usulan', 'skema','tahapreview.status','usulananggotamhs.mahasiswa')->where("usulan_id","=",$id)->get();
        $dosen = Dosen::all();
        return view('plotting_reviewer.show', compact("show_plotting_reviewer","dosen"));
    }
}
