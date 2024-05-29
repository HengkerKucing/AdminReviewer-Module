<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use App\Models\Pendanaan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class RefPendanaanController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index($trx_skema_id): View
    {
        $pendanaan = Pendanaan::where('trx_skema_id', $trx_skema_id)
                              ->where('is_active', 1)
                              ->get();
        $skema = Skema::where('trx_skema_id', $trx_skema_id)->first();

        return view('skema_pendanaan.index', compact('pendanaan', 'trx_skema_id', 'skema'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create($trx_skema_id): View
    {
        return view('skema_pendanaan.create', compact('trx_skema_id'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @param  mixed $trx_skema_id
     * @return RedirectResponse
     */
    public function store(Request $request, $trx_skema_id): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'pendanaan_key' => 'required',
            'pendanaan_nama' => 'required',
            'pendanaan_keterangan' => 'required',
            'pendanaan_persentase' => 'required',
        ]);

        if ($validator->fails()) {
            toastr()->error('Pendanaan gagal ditambah: ' . $validator->errors()->first());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $save_data = $request->all();
            $save_data['trx_skema_id'] = $trx_skema_id;
            $save_data['is_active'] = 1;
            $data = Pendanaan::create($save_data);
            toastr()->success('Pendanaan berhasil ditambahkan');
            return redirect()->route('skema-pendanaan.index', $trx_skema_id);
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat menambahkan pendanaan: ' . $th->getMessage());
            return redirect()->route('skema-pendanaan.index', $trx_skema_id);
        }
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit($trx_skema_id, $pendanaan_id): View
    {
        $pendanaan = Pendanaan::find($pendanaan_id);
        return view('skema_pendanaan.edit', compact('pendanaan', 'trx_skema_id', 'pendanaan_id'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $trx_skema_id, $pendanaan_id): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'pendanaan_key' => 'required',
            'pendanaan_nama' => 'required',
            'pendanaan_keterangan' => 'required',
            'pendanaan_persentase' => 'required',
        ]);

        if ($validator->fails()) {
            toastr()->error('Pendanaan gagal diperbarui </br> Periksa kembali data anda');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $pendanaan = Pendanaan::findOrFail($pendanaan_id);
            $pendanaan->update($request->all());
            toastr()->success('Pendanaan berhasil diperbarui');
            return redirect()->route('skema-pendanaan.index', $trx_skema_id);
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat memperbarui skema: ' . $th->getMessage());
            return redirect()->route('skema-pendanaan.index', $trx_skema_id);
        }
    }

    /**
     * destroy
     *
     * @param  mixed $trx_skema_id
     * @param  mixed $pendanaan_id
     * @return RedirectResponse
     */
    public function destroy($trx_skema_id, $pendanaan_id): RedirectResponse
    {
        try {
            $pendanaan = Pendanaan::findOrFail($pendanaan_id);
            $pendanaan->is_active = 0;
            $pendanaan->save();
            toastr()->success('Pendanaan berhasil dihapus');
            return redirect()->route('skema-pendanaan.index', $trx_skema_id);
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat menghapus pendanaan: ' . $th->getMessage());
            return redirect()->route('skema-pendanaan.index', $trx_skema_id);
        }
    }
}
