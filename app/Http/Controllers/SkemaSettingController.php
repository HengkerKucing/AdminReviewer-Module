<?php

namespace App\Http\Controllers;
use App\Models\SkemaSettingModel;
use App\Models\Skema;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class SkemaSettingController extends Controller
{
    public function index($id): View
    {
        $skemasetting =  SkemaSettingModel::where('trx_skema_id', $id)->get();
        $skema =  Skema::where('trx_skema_id', $id)->get();

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
        $skemafile = SkemaSettingModel::find($id);

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
            $skemafile = SkemaSettingModel::findOrFail($id);
            $skemafile->update($request->all());
            toastr()->success('Skema berhasil diperbarui');
            return redirect()->route('skema-file.index', $trx_skema_id);
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat memperbarui skema: ' . $th->getMessage());
            return view('skema_file.edit', compact('skemafile'));
        }
    }

    // public function destroy($id)
    // {
    //     try {
    //         $skema = Skema::findOrFail($id);
    //         $skema->delete();
    //         toastr()->success('Skema berhasil dihapus');
    //         return redirect()->route('ref-skema.index');
    //     } catch (\Throwable $th) {
    //         toastr()->warning('Terdapat masalah saat menghapus skema: ' . $th->getMessage());
    //         return redirect()->route('ref-skema.index');
    //     }
    // }
}
