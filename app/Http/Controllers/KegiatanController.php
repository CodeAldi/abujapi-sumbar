<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriKegiatan;
use Illuminate\Support\Facades\Storage;


class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('admin.kegiatan.index')
        ->with('kegiatan',$kegiatan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoriKegiatan = KategoriKegiatan::all();
        return view('admin.kegiatan.create')
        ->with('kategoriKegiatan',$kategoriKegiatan);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $judul_kegiatan = $request->judul_kegiatan;
        $slug = Str::slug($judul_kegiatan);
        $kategori_kegiatan_id = $request->kategori_kegiatan_id;
        $short = Str::limit(strip_tags($request->body), 50, '...');
        $file_thumbnail = $request->file('thumbnail');
        // $thumbnail = $file_thumbnail->storeAs('kegiatan-thumbnail', $judul_kegiatan . '.' . $request->file('thumbnail')->extension());
        $thumbnail = Storage::putFile('kegiatan-thumbnail',$file_thumbnail);

        $kegiatan = new Kegiatan();
        $kegiatan->judul_kegiatan = $judul_kegiatan;
        $kegiatan->slug = $slug;
        $kegiatan->kategori_kegiatan_id = $kategori_kegiatan_id;
        $kegiatan->thumbnail = $thumbnail;
        $kegiatan->short = $short;
        $kegiatan->body = $request->body;
        $kegiatan->save();
        // dd($request->all(),$file_thumbnail,$thumbnail);
        return redirect()->route('kegiatan.kegiatan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        $kategoriKegiatan = KategoriKegiatan::all();
        return view('admin.kegiatan.edit')
        ->with('kegiatan', $kegiatan)
        ->with('kategoriKegiatan', $kategoriKegiatan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $kegiatan->judul_kegiatan = $request->judul_kegiatan;
        $slug = Str::slug($request->judul_kegiatan);
        $kegiatan->slug = $slug;
        $kegiatan->kategori_kegiatan_id = $request->kategori_kegiatan_id;
        $kegiatan->body = $request->body;
        $short = Str::limit(strip_tags($request->body), 50, '...');
        $kegiatan->short = $short;
        if ($request->status_thumbnail == 'new') {
            Storage::delete($kegiatan->thumbnail);
            $thumbnail = $request->file('thumbnail')->storeAs('news-thumbnail', $kegiatan->judul_kegiatan . '.' . $request->file('thumbnail')->extension());
            $kegiatan->thumbnail = $thumbnail;
        }
        $kegiatan->save();
        return redirect()->route('kegiatan.kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        Storage::delete($kegiatan->thumbnail);
        $kegiatan->delete();
        return redirect()->route('kegiatan.kegiatan.index');
    }
}
