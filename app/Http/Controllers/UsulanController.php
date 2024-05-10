<?php

namespace App\Http\Controllers;

use App\Models\Usulan;
use Illuminate\View\View;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;

class UsulanController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:read_profil')->only('index', 'show');
        // $this->middleware('permission:create_profil')->only('create', 'store');
        // $this->middleware('permission:update_profil')->only('edit', 'update');
        // $this->middleware('permission:delete_profil')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(): View
    {
        $usulan = Usulan::all();
        return view('usulan.index', compact('usulan'));
    }
}
