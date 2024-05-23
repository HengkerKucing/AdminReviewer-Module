<?php

namespace App\Http\Controllers;

use App\Models\Usulan;
use App\Models\ReviewUsulan;
use Illuminate\View\View;
// use Illuminate\Http\Request;

class ReviewUsulanController extends Controller
{
    public function index(): View
    {
        $usulan = Usulan::all();
        return view('review_usulan.index', compact('usulan'));
    }

    public function show()
    {
        $reviewUsulan = ReviewUsulan::all();
        // $usulan = Usulan::where('usulan_id', $usulan_id)->first();
        return view('review_usulan.show', compact('reviewUsulan'));
    }
}
