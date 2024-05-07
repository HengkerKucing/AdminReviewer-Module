<?php

namespace App\Http\Controllers;

use App\Models\UsulanPenelitian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsulanPenelitianController extends Controller
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

    public function index()
    {
<<<<<<< HEAD
        $usulanpenelitian = UsulanPenelitian::all();
        return view('usulan_penelitian.index')->with('usulan', $usulanpenelitian);
=======
        $usulan = Usulan::all();
        return view('usulan_penelitian.index')->with('usulan', $usulan);
>>>>>>> e8cff69340b21e015a73f5a4ad45033d37b73187
        // return view('usulan.index');
    }
}
