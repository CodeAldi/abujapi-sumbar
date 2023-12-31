<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::paginate(3);
        return view('admin.berita.index')
        ->with('berita',$berita);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoriBerita = KategoriBerita::all();
        return view('admin.berita.create')
        ->with('kategoriBerita',$kategoriBerita);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul_berita' => 'required|max:255',
            'kategori_berita_id' => 'required',
            'body' => 'required',
            'thumbnail' => 'required',
        ]);
        $judul_berita = $request->judul_berita;
        $slug = Str::slug($judul_berita);
        $kategori_berita_id = $request->kategori_berita_id;
        $short = Str::limit(strip_tags($request->body), 200, '...');
        $thumbnail = $request->file('thumbnail')->storeAs('news-thumbnail',$judul_berita.'.'.$request->file('thumbnail')->extension());
        

        $berita = new Berita();
        $berita->judul_berita = $judul_berita;
        $berita->slug = $slug;
        $berita->kategori_berita_id = $kategori_berita_id;
        $berita->thumbnail = $thumbnail;
        $berita->short = $short;
        $berita->body = $request->body;
        $berita->save();
        return redirect()->route('berita.berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        $kategoriBerita = KategoriBerita::all();
        return view('admin.berita.edit')
        ->with('berita',$berita)
        ->with('kategoriBerita',$kategoriBerita);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $berita->judul_berita = $request->judul_berita;
        $slug = Str::slug($request->judul_berita);
        $berita->slug = $slug;
        $berita->kategori_berita_id = $request->kategori_berita_id;
        $berita->body = $request->body;
        $short = Str::limit(strip_tags($request->body), 200, '...');
        $berita->short = $short;
        if($request->status_thumbnail == 'new'){
            Storage::delete($berita->thumbnail);
            $thumbnail = $request->file('thumbnail')->storeAs('news-thumbnail', $berita->judul_berita . '.' . $request->file('thumbnail')->extension());
            $berita->thumbnail = $thumbnail;
        }
        $berita->save();
        return redirect()->route('berita.berita.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        Storage::delete($berita->thumbnail);
        $berita->delete();
        return redirect()->route('berita.berita.index');
    }
}
