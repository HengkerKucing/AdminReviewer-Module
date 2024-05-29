<?php

namespace App\Http\Controllers;

use App\Models\SkemaSettingModel;
use App\Models\Skema;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SkemaSettingController extends Controller
{
    public function index($id): View
    {
        $skemasetting = SkemaSettingModel::where('trx_skema_id', $id)
                                         ->where('is_active', 1)
                                         ->get();
        $skema = Skema::where('trx_skema_id', $id)->get();

        return view('skema_setting.index', [
            'skemasetting' => $skemasetting,
            'trx_skema_id' => $id,
            'skema' => $skema
        ]);
    }

    public function create($trx_skema_id)
    {
        return view('skema_setting.create', compact('trx_skema_id'));
    }

    public function store(Request $request, $trx_skema_id)
    {
        $validator = Validator::make($request->all(), [
            'setting_label' => 'required|string',
            'setting_value' => 'required'
        ]);

        if ($validator->fails()) {
            toastr()->error('Skema gagal ditambah: ' . $validator->errors()->first());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $save_data = $request->all();
            $save_data['trx_skema_id'] = $trx_skema_id;
            $save_data['is_active'] = 1;
            if (!isset($save_data['setting_key'])) {
                $save_data['setting_key'] = 'default_key';
            }
            $data = SkemaSettingModel::create($save_data);
            toastr()->success('Skema berhasil ditambahkan');
            return redirect()->route('skema-setting.index', $trx_skema_id);
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat menambahkan skema: ' . $th->getMessage());
            return redirect()->route('skema-setting.index', $trx_skema_id);
        }
    }

    public function edit($trx_skema_id, $id)
    {
        $skemasetting = SkemaSettingModel::find($id);

        return view('skema_setting.edit', compact('skemasetting', 'trx_skema_id', 'id'));
    }

    public function update(Request $request, $trx_skema_id, $id)
    {
        $validator = Validator::make($request->all(), [
            'setting_label' => 'required',
            'setting_value' => 'required',
        ]);

        if ($validator->fails()) {
            toastr()->error('Skema gagal diperbarui </br> Periksa kembali data anda');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $skemasetting = SkemaSettingModel::findOrFail($id);
            $skemasetting->update($request->all());
            toastr()->success('Skema berhasil diperbarui');
            return redirect()->route('skema-setting.index', $trx_skema_id);
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat memperbarui skema: ' . $th->getMessage());
            return view('skema_setting.edit', compact('skemasetting'));
        }
    }

    public function destroy($trx_skema_id, $skema_setting_id)
    {
        try {
            $skemasetting = SkemaSettingModel::findOrFail($skema_setting_id);
            $skemasetting->is_active = 0;
            $skemasetting->save();
            toastr()->success('Skema berhasil dihapus');
            return redirect()->route('skema-setting.index', $trx_skema_id);
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat menghapus skema: ' . $th->getMessage());
            return redirect()->route('skema-setting.index', $trx_skema_id);
        }
    }
}
