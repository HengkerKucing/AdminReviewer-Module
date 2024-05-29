<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RefSkemaController extends Controller
{
    public function index(): View
    {
        $skemas = Skema::where('is_active', 1)->get();
        return view('ref_skema.index', compact('skemas'));
    }

    public function create()
    {
        $skemas = Skema::all();
        return view('ref_skema.create', compact('skemas'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'trx_skema_nama' => 'required|string',
            'trx_skema_kode' => 'required',
            'periode_tahun' => 'required',
        ]);

        if ($validator->fails()) {
            toastr()->error('Skema gagal ditambah: ' . $validator->errors()->first());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $data = Skema::create($request->all());
            toastr()->success('Skema berhasil ditambahkan');
            return redirect()->route('ref-skema.index');
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat menambahkan skema: ' . $th->getMessage());
            return redirect()->route('ref-skema.index');
        }
    }

    public function edit($id)
    {
        $skema = Skema::findorfail($id);
        return view('ref_skema.edit', compact('skema'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'trx_skema_nama' => 'required|string',
            'trx_skema_kode' => 'required',
            'periode_tahun' => 'required',
        ]);

        if ($validator->fails()) {
            toastr()->error('Skema gagal diperbarui </br> Periksa kembali data anda');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $skema = Skema::findOrFail($id);
            $skema->update($request->all());
            toastr()->success('Skema berhasil diperbarui');
            return redirect()->route('ref-skema.index');
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat memperbarui skema: ' . $th->getMessage());
            return redirect()->route('ref-skema.index');
        }
    }

    public function destroy($id)
    {
        try {
            $skema = Skema::findOrFail($id);
            $skema->is_active = 0;
            $skema->save();
            toastr()->success('Skema berhasil dihapus');
            return redirect()->route('ref-skema.index');
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat menghapus skema: ' . $th->getMessage());
            return redirect()->route('ref-skema.index');
        }
    }
}
