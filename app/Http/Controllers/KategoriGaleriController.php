<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\KategoriGaleri;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KategoriGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriGaleri = KategoriGaleri::all();
        $galeri = Galeri::all();
        foreach ($kategoriGaleri as $key => $value) {
            $count_kategori_galeri[$value->id] = 0;
            foreach ($galeri as $keygaleri => $valuegaleri) {
                if ($value->id == $valuegaleri->kategori_galeri_id) {
                    $count_kategori_galeri[$value->id] = $count_kategori_galeri[$value->id] + 1;
                }
            }
        }
        return view('admin.kategori-galeri.index')->with('kategoriGaleri',$kategoriGaleri)->with('countKategoriGaleri',$count_kategori_galeri);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul_kategori' => 'required|unique:kategori_galeri|max:255',
        ]);
        $validatedData['slug'] = Str::slug($validatedData['judul_kategori']);
        $kategoriGaleri = new KategoriGaleri();
        $kategoriGaleri->judul_kategori = $validatedData['judul_kategori'];
        $kategoriGaleri->slug = $validatedData['slug'];
        $kategoriGaleri->save();
        return redirect()->route('gallery.kategori-gallery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriGaleri $kategoriGaleri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriGaleri $kategoriGaleri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriGaleri $kategoriGaleri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriGaleri $kategoriGaleri)
    {
        $galeri = Galeri::where('kategori_galeri_id','LIKE',$kategoriGaleri->id)->get();
        foreach ($galeri as $key => $value) {
            $value->kategori_galeri_id = 1;
            $value->save();
        }
        $kategoriGaleri->delete();
        return redirect()->route('gallery.kategori-gallery.index');
    }
}
