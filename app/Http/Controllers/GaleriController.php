<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriGaleri;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('admin.galeri.index')->with('galeri',$galeri);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoriGaleri = KategoriGaleri::all();
        return view('admin.galeri.create')->with('kategoriGaleri', $kategoriGaleri);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gallery_title'=>'required',
            'gallery_kategori'=>'required',
            'upload_image'=> 'required',
        ]);
        $galeri = new Galeri();
        // dd($request->file('upload_image'));
        $path = $request->file('upload_image')->storeAs('gallery', $validatedData['gallery_title'] . '.' . $request->file('upload_image')->extension());
        $galeri->kategori_galeri_id = $validatedData['gallery_kategori'];
        $galeri->judul_galeri = $validatedData['gallery_title'];
        $galeri->slug = Str::slug($validatedData['gallery_title']);
        $galeri->path = $path;
        $galeri->save();
        return redirect()->route('gallery.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
