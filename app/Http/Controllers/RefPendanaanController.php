<?php

namespace App\Http\Controllers;

use App\Models\Pendanaan;
use App\Models\Skema;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Hash;

class RefPendanaanController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index($id)
    {
        $pendanaan = Pendanaan::where('trx_skema_id', $id)->get();
        $skema = Skema::where('trx_skema_id', $id)->first();

        return view('ref_pendanaan.index', compact('pendanaan', 'id', 'skema'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create($id)
    {
        // array pendanaan_key
        $skema = Skema::where('trx_skema_id', $id)->first();
        $pendanaan = Pendanaan::where('trx_skema_id', $id)->get();

        return view('ref_pendanaan.create', compact('pendanaan', 'id', 'skema'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'pendanaan_key' => 'required',
            'pendanaan_nama' => 'required',
            'pendanaan_keterangan' => 'required',
            'pendanaan_persentase' => 'required',
            'is_active'
        ]);

        if ($validator->fails()) {
            toastr()->error('Pendanaan gagal ditambah: ' . $validator->errors()->first());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = Pendanaan::create($request->all());
        try {
            $pendanaan = Pendanaan::where('trx_skema_id', $id)->get();
            toastr()->success('Pendanaan berhasil ditambahkan');
            return redirect()->route('ref-pendanaan.index', $id);
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat menambahkan pendanaan: ' . $th->getMessage());
            return redirect()->route('ref-pendanaan.index', $id);
        }
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit($id, $pendanaan_id): View
    {
        //get pendanaan by ID
        $pendanaan = Pendanaan::where('trx_skema_id', $id)->get();

        //render view 
        return view('ref_pendanaan.edit', compact('pendanaan', 'id', 'pendanaan_id'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id, $pendanaan_id)
    {
        // $skema = Skema::findOrFail($id);
        $validator = Validator::make($request->all(), [
            // 'pendanaan_key' => 'required',
            'pendanaan_nama',
            'pendanaan_keterangan',
            'pendanaan_persentase',
            // 'is_active' => 'required'
        ]);

        if ($validator->fails()) {
            toastr()->error('Pendanaan gagal diperbarui </br> Periksa kembali data anda');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $pendanaan = Pendanaan::all();
            $pendanaan->update($request->all());
            toastr()->success('Pendanaan berhasil diperbarui');
            return redirect()->route('ref-pendanaan.index', $id, $pendanaan_id);
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat memperbarui skema: ' . $th->getMessage());
            return redirect()->route('ref-pendanaan.index', $id, $pendanaan_id);
        }
    }
    // public function update(Request $request, $id): RedirectResponse
    // {
    //     //get pendanaan by ID
    //     $pendanaan = Pendanaan::findOrFail($id);

    //     //update pendanaan
    //     $pendanaan->update([
    //         'pendanaan_nama'        => $request->pendanaan_nama,
    //         'pendanaan_keterangan'  => $request->pendanaan_keterangan,
    //         'pendanaan_persentase'  => $request->pendanaan_persentase
    //     ]);

    //     //redirect to index
    //     return redirect()->route('ref_pendanaan.show', ['id' => $id])->with(['success' => 'Data Berhasil Diubah!']);
    // }

    /**
     * destroy
     *
     * @param  mixed $pendanaan
     * @return void
     */
    public function destroy($id)
    {
        try {
            $pendanaan = Pendanaan::findOrFail($id);
            $pendanaan->update(['is_active'=>0]);
            toastr()->success('Pendanaan berhasil dihapus');
            return redirect()->route('ref-pendanaan.index', $id);
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat menghapus skema: ' . $th->getMessage());
            return redirect()->route('ref-pendanaan.index', $id);
        }
    }
    // public function destroy($pendanaan_id): RedirectResponse
    // {
    //     //get pendanaan by ID
    //     $pendanaan = Pendanaan::findOrFail($pendanaan_id);

    //     //delete pendanaan
    //     $pendanaan->delete();

    //     //redirect to index
    //     return redirect()->route('ref_pendanaan.show')->with(['success' => 'Data Berhasil Dihapus!']);
    // }
}
