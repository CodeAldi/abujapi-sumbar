<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::paginate(10);
        return view('admin.anggota.index')->with('anggota',$anggota);
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
            'nomor_sertifikat'=> 'required|unique:anggota,nomor_sertifikat',
            'badan_usaha' => 'required|max:255',
            'alamat' => 'required|max:255',
        ]);
        $anggota = new Anggota();
        $anggota->nomor_sertifikat = $request->nomor_sertifikat;
        $anggota->badan_usaha = $request->badan_usaha;
        $anggota->alamat = $request->alamat;
        $anggota->save();
        return redirect()->route('anggota.index');
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
    public function update(Request $request, Anggota $anggota)
    {
        $anggota->nomor_sertifikat = $request->nomor_sertifikat;
        $anggota->badan_usaha = $request->badan_usaha;
        $anggota->alamat = $request->alamat;
        $anggota->save();
        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        $anggota->delete();
        return redirect()->route('anggota.index');
    }
}
