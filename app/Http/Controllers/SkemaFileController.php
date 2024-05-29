<?php

namespace App\Http\Controllers;

use App\Models\SkemaFileModel;
use App\Models\Skema;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SkemaFileController extends Controller
{
    public function index($id): View
    {
        $skemafile = SkemaFileModel::where('trx_skema_id', $id)
                                    ->where('is_active', 1)
                                    ->get();
        $skema = Skema::where('trx_skema_id', $id)->get();
        $types = [
            "application/pdf" => "PDF",
            "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" => "XLSX",
            "text/csv" => "CSV",
            "application/vnd.openxmlformats-officedocument.wordprocessingml.document" => "DOCX",
        ];
        foreach ($skemafile as $file) {
            $file->file_type_readable = $types[$file->file_accepted_type] ?? 'Unknown';
        }

        return view('skema_file.index', [
            'skemafile' => $skemafile,
            'trx_skema_id' => $id,
            'skema' => $skema
        ]);
    }

    public function create($trx_skema_id)
    {
        return view('skema_file.create', compact('trx_skema_id'));
    }

    public function store(Request $request, $trx_skema_id)
    {
        $validator = Validator::make($request->all(), [
            'file_caption' => 'required|string',
            'file_accepted_type' => 'required',
            'file_template' => 'required'
        ]);

        if ($validator->fails()) {
            toastr()->error('Skema gagal ditambah: ' . $validator->errors()->first());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $file = $request->file('file_template');
            $save_data = $request->all();
            $nama_file = $file->getClientOriginalName() . '.' . $file->getClientOriginalExtension();
            $save_data['trx_skema_id'] = $trx_skema_id;
            $save_data['is_active'] = 1;
            $data = SkemaFileModel::create($save_data);
            $file->storeAs('public', $nama_file);
            toastr()->success('Skema berhasil ditambahkan');
            return redirect()->route('skema-file.index', $trx_skema_id);
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat menambahkan skema: ' . $th->getMessage());
            return redirect()->route('skema-file.index', $trx_skema_id);
        }
    }

    public function edit($trx_skema_id, $id)
    {
        $skemafile = SkemaFileModel::find($id);

        return view('skema_file.edit', compact('skemafile', 'trx_skema_id', 'id'));
    }

    public function update(Request $request, $trx_skema_id, $id)
    {
        $validator = Validator::make($request->all(), [
            'file_caption' => 'required|string',
            'file_accepted_type' => 'required',
            // 'file_template' => 'required'
        ]);

        if ($validator->fails()) {
            toastr()->error('Skema gagal diperbarui </br> Periksa kembali data anda');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $skemafile = SkemaFileModel::findOrFail($id);
            $skemafile->update($request->all());
            toastr()->success('Skema berhasil diperbarui');
            return redirect()->route('skema-file.index', $trx_skema_id);
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat memperbarui skema: ' . $th->getMessage());
            return view('skema_file.edit', compact('skemafile'));
        }
    }

    public function destroy($trx_skema_id, $skema_file_id)
    {
        try {
            $skemafile = SkemaFileModel::findOrFail($skema_file_id);
            $skemafile->is_active = 0;
            $skemafile->save();
            toastr()->success('Skema berhasil dihapus');
            return redirect()->route('skema-file.index', $trx_skema_id);
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat menghapus skema: ' . $th->getMessage());
            return redirect()->route('skema-file.index', $trx_skema_id);
        }
    }
}
