<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriKegiatan;
use App\Models\Kegiatan;

class KategoriKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriKegiatan = KategoriKegiatan::all();
        $kegiatan = Kegiatan::all();
        foreach ($kategoriKegiatan as $key => $value) {
            $count_kategori_kegiatan[$value->id] = 0;
            foreach ($kegiatan as $keykegiatan => $valuekegiatan) {
                if ($value->id == $valuekegiatan->kategori_kegiatan_id) {
                    $count_kategori_kegiatan[$value->id] = $count_kategori_kegiatan[$value->id] + 1;
                }
            }
        }
        return view('admin.kategori-kegiatan.index')
        ->with('kategoriKegiatan', $kategoriKegiatan)
        ->with('countKategoriKegiatan',$count_kategori_kegiatan);
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
            'judul_kategori' => 'required|unique:kategori_kegiatan|string|max:50',
        ]);
        $kategoriKegiatan = new KategoriKegiatan();
        $kategoriKegiatan->judul_kategori = $validatedData['judul_kategori'];
        $kategoriKegiatan->slug = Str::slug($kategoriKegiatan->judul_kategori);
        $kategoriKegiatan->save();
        return redirect()->route('kegiatan.kategori-kegiatan.index');
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
    public function update(Request $request, KategoriKegiatan $kategoriKegiatan)
    {
        $kategoriKegiatan->judul_kategori = $request->judul_kategori;
        $kategoriKegiatan->save();
        return redirect()->route('kegiatan.kategori-kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriKegiatan $kategoriKegiatan)
    {
        $kegiatan = Kegiatan::where('kategori_kegiatan_id', 'LIKE', $kategoriKegiatan->id)->get();
        foreach ($kegiatan as $key => $value) {
            $value->kategori_kegiatan_id = 1;
            $value->save();
        }
        $kategoriKegiatan->delete();
        return redirect()->route('kegiatan.kategori-kegiatan.index');
    }
}
