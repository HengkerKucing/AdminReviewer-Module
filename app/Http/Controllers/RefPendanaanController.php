<?php

namespace App\Http\Controllers;

use App\Models\Pendanaan;
use App\Models\Skema;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
// use Illuminate\Support\Facades\Hash;

class RefPendanaanController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:read_pendanaan')->only('index', 'show');
        // $this->middleware('permission:create_pendanaan')->only('create', 'store');
        // $this->middleware('permission:update_pendanaan')->only('edit', 'update');
        // $this->middleware('permission:delete_pendanaan')->only('destroy');
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

    /**
     * index
     *
     * @return View
     */
    public function index($id): View
    {
        //get 
        $pendanaan =  Pendanaan::where('trx_skema_id', $id)->get();
        $skema =  Skema::where('trx_skema_id', $id)->get();

        //render view 
        return view('ref_pendanaan.index', [
            'pendanaan' => $pendanaan,
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
        return view('ref_pendanaan.create');
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
        Pendanaan::create([
            'pendanaan_nama'        => $request->pendanaan_nama,
            'pendanaan_keterangan'  => $request->pendanaan_keterangan,
            'pendanaan_persentase'  => $request->pendanaan_persentase
        ]);
        //redirect to show
        return redirect()->route('ref_pendanaan.show')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get pendanaan by ID
        $pendanaan = Pendanaan::findOrFail($id);

        //render view 
        return view('ref_pendanaan.edit', compact('pendanaan'));
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
        $pendanaan = Pendanaan::findOrFail($id);

        //update pendanaan
        $pendanaan->update([
            'pendanaan_nama'        => $request->pendanaan_nama,
            'pendanaan_keterangan'  => $request->pendanaan_keterangan,
            'pendanaan_persentase'  => $request->pendanaan_persentase
        ]);

        //redirect to index
        return redirect()->route('ref_pendanaan.index', ['pendanaan_id' => $id])->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $pendanaan
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get pendanaan by ID
        $pendanaan = Pendanaan::findOrFail($id);

        //delete pendanaan
        $pendanaan->delete();

        //redirect to index
        return redirect()->route('ref_pendanaan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
