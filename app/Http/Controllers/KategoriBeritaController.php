<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class KategoriBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriBerita = KategoriBerita::all();
        $berita = Berita::all();
        foreach ($kategoriBerita as $key => $value) {
            $count_kategori_berita[$value->id] = 0;
            foreach ($berita as $keyberita => $valueberita) {
                if ($value->id == $valueberita->kategori_berita_id) {
                    $count_kategori_berita[$value->id] = $count_kategori_berita[$value->id] + 1;
                }
            }
        }
        // dd($count_kategori_berita[2]);
        return view('admin.kategori-berita.index')
        ->with('kategoriBerita',$kategoriBerita)
        ->with('countKategoriBerita',$count_kategori_berita);
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
            'judul_kategori' => 'required|string|max:50',
        ]);
        $kategoriBerita = new KategoriBerita();
        $kategoriBerita->judul_kategori = $validatedData['judul_kategori'];
        $kategoriBerita->save();
        return redirect()->route('berita.kategori-berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriBerita $kategoriBerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriBerita $kategoriBerita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriBerita $kategoriBerita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriBerita $kategoriBerita)
    {
        $kategoriBerita->delete();
        return redirect()->route('berita.kategori-berita.index');
    }
}
