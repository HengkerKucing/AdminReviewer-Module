<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use App\Models\SkemaFile;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
    public function index($id): View
    {
        $skemaFile =  SkemaFile::where('trx_skema_id', $id)->get();
        $skema =  Skema::where('trx_skema_id', $id)->get();
        return view('ref_skema_file.index', [
            'skemaFile' => $skemaFile,
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
        return view('ref_skema_file.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        SkemaFile::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        //redirect to index
        return redirect()->route('ref_skema_file.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        $skemaFile = SkemaFile::findOrFail($id);
        return view('ref_skema_file.show', compact('skemaFile'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $skemaFile = SkemaFile::findOrFail($id);

        //render view with post
        return view('ref_skema_file.edit', compact('skemaFile'));
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
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //get ID
        $skemaFile = SkemaFile::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //update post with new image
            $skemaFile->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);

        } else {

            //update post without image
            $skemaFile->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('ref_skema_file.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $skemaFile
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get ID
        $skemaFile = SkemaFile::findOrFail($id);

        //delete
        $skemaFile->delete();

        //redirect to index
        return redirect()->route('ref_skema_file.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

    // public function title($id)
    // {
    //     $skema =  Skema::where('trx_skema_id', $id)->get();

    //     return view('ref_skema_file.show', [
    //         'skema' => $skema
    //     ]);

    // }