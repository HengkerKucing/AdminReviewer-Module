<?php

namespace App\Http\Controllers;
use App\Models\SkemaFile;
use App\Models\Skema;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RefSkemaFileController extends Controller
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

   

    public function show($id)
    {
        $skemafile =  SkemaFile::where('trx_skema_id', $id)->get();
        $skema =  Skema::where('trx_skema_id', $id)->get();

        return view('ref_skema_file.show', [
            'skemafile' => $skemafile,
            'skema' => $skema
        ]);

    }

    public function create()
    {
        $skemafile = SkemaFile::all();
        return view('ref_skema_file.create', compact('skemafile'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file_caption' => 'required|string',
            'file_accepted_type' => 'required',
        ]);

        if ($validator->fails()) {
            toastr()->error('Skema gagal ditambah: ' . $validator->errors()->first());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $data = SkemaFile::create($request->all());
            toastr()->success('Skema berhasil ditambahkan');
            return redirect()->route('ref-skema-file.show');
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat menambahkan skema: ' . $th->getMessage());
            return redirect()->route('ref-skema-file.show');
        }
    }

    public function edit($id)
    {
        $skemafile = SkemaFile::findorfail($id);
        return view('ref_skema_file.edit', compact('skemafile'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'file_caption' => 'required|string',
            'file_accepted_type' => 'required',
        ]);

        if ($validator->fails()) {
            toastr()->error('Skema gagal diperbarui </br> Periksa kembali data anda');
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $skemafile = SkemaFile::findOrFail($id);
            $skemafile->update($request->all());
            toastr()->success('Skema berhasil diperbarui');
            return redirect()->route('ref-skema-file.show');
        } catch (\Throwable $th) {
            toastr()->warning('Terdapat masalah saat memperbarui skema: ' . $th->getMessage());
            return view('ref_skema_file.edit', compact('skemafile'));
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
