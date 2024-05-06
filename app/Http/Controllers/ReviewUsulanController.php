<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewUsulan;

class ReviewUsulanController extends Controller
{
    public function index()
    {
        $usulan = ReviewUsulan::all();
        return view('review_usulan.index')->with('usulan', $usulan);
    }
}
