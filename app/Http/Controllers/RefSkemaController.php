<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class RefSkemaController extends Controller
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
    //     $skema = Skema::all();
    //     return view('ref_skema.index')->with('skema', $skema);
    //     // return view('ref_skema.index');
    // }

    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $skema = Skema::all();
        return view('ref_skema.index', compact('skema'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('ref_skema.create');
    }

    /**
     * store database
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'trx_skema_nama'    =>  'required|',
            'trx_skema_kode'    =>  'required|',
            'jenis_skema_id'    =>  'required|',
            'periode_tahun' =>  'required|',
            'proposal_max_upload'   =>  'required|',
            'revisi_proposal_max_upload'    =>  'required|',
            'laporan_kemajuan__max_upload'  =>  'required|',
            'laporan_akhir__max_upload' =>  'required|',
            'is_active' =>  'required|',
        ]);

        //create skema
        Skema::create([
            'trx_skema_nama'     => $request->trx_skema_nama,
            'trx_skema_kode'     => $request->trx_skema_kode,
            'jenis_skema_id'     => $request->jenis_skema_id,
            'periode_tahun'   => $request->periode_tahun,
            'proposal_max_upload'     => $request->proposal_max_upload,
            'revisi_proposal_max_upload'     => $request->revisi_proposal_max_upload,
            'laporan_kemajuan__max_upload'     => $request->laporan_kemajuan__max_upload,
            'laporan_akhir__max_upload'     => $request->laporan_akhir__max_upload,
            'is_active'     => $request->is_active,
        ]);
        //redirect to index
        return redirect()->route('ref_skema.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $trx_skema_id
     * @return View
     */
    public function edit(string $trx_skema_id): View
    {
        //get skema by ID
        $skema = Skema::findOrFail($trx_skema_id);

        //render view with skema
        return view('ref_skema.edit', compact('skema'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $trx_skema_id
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'trx_skema_nama'    =>  'required|',
            'trx_skema_kode'    =>  'required|',
            'jenis_skema_id'    =>  'required|',
            'periode_tahun' =>  'required|',
            'proposal_max_upload'   =>  'required|',
            'revisi_proposal_max_upload'    =>  'required|',
            'laporan_kemajuan__max_upload'  =>  'required|',
            'laporan_akhir__max_upload' =>  'required|',
        ]);

        //get ID
        $skema = Skema::findOrFail($request->trx_skema_id);

        //update skema
        $skema->update([
            'trx_skema_nama'     => $request->trx_skema_nama,
            'trx_skema_kode'     => $request->trx_skema_kode,
            'jenis_skema_id'     => $request->jenis_skema_id,
            'periode_tahun'   => $request->periode_tahun,
            'proposal_max_upload'     => $request->proposal_max_upload,
            'revisi_proposal_max_upload'     => $request->revisi_proposal_max_upload,
            'laporan_kemajuan__max_upload'     => $request->laporan_kemajuan__max_upload,
            'laporan_akhir__max_upload'     => $request->laporan_akhir__max_upload,
        ]);
        //redirect to index
        return redirect()->route('ref_skema.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $skema
     * @return void
     */
    public function destroy(Request $request): RedirectResponse
    {
        //get skema by ID
        $skema = Skema::findOrFail($request->trx_skema_id);

        //delete skema
        $skema->delete();

        //redirect to index
        return redirect()->route('ref_skema.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
