<?php

namespace App\Http\Controllers;
use App\Models\SkemaSetting;
use App\Models\Skema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RefSkemaSettingController extends Controller
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

    // public function index()
    // {
    //     $skemafile =  SkemaFile::all();
      
    //     return view('ref_skema_file.index')->with('skemafile', $skemafile);
    // }
    public function show($id)
    {
        $skemasetting =  SkemaSetting::where('trx_skema_id', $id)->get();
        $skema =  Skema::where('trx_skema_id', $id)->get();

        return view('ref_skema_setting.show', [
            'skemasetting' => $skemasetting,
            'skema' => $skema
        ]);
    }

}
