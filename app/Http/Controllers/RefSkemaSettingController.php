<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use App\Models\SkemaSetting;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
    public function show($id): View
    {
        $skemasetting =  SkemaSetting::where('trx_skema_id', $id)->get();
        $skema =  Skema::where('trx_skema_id', $id)->get();

        return view('ref_skema_setting.index', [
            'skemasetting' => $skemasetting,
            'skema' => $skema
        ]);
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('ref_skema_setting.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //create pendanaan
        SkemaSetting::create([
            'pendanaan_nama'        => $request->pendanaan_nama,
            'pendanaan_keterangan'  => $request->pendanaan_keterangan,
            'pendanaan_persentase'  => $request->pendanaan_persentase
        ]);
        //redirect to show
        return redirect()->route('ref_skema_setting.show')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get ID
        $skemaSetting = SkemaSetting::findOrFail($id);

        //render view 
        return view('ref_skema_setting.edit', compact('skemaSetting'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //get pendanaan by ID
        $skemaSetting = SkemaSetting::findOrFail($id);

        //update pendanaan
        $skemaSetting->update([
            'pendanaan_nama'        => $request->pendanaan_nama,
            'pendanaan_keterangan'  => $request->pendanaan_keterangan,
            'pendanaan_persentase'  => $request->pendanaan_persentase
        ]);

        //redirect to index
        return redirect()->route('ref_skema_setting.index', ['pendanaan_id' => $id])->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $skemaSetting
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get ID
        $skemaSetting = SkemaSetting::findOrFail($id);

        //delete 
        $skemaSetting->delete();

        //redirect to index
        return redirect()->route('ref_skema_setting.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
