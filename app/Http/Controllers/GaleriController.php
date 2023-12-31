<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\galeriVideo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriGaleri;
use Illuminate\Support\Facades\Storage;

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
    public function indexvideo()
    {
        $galeri = galeriVideo::all();
        return view('admin.galeri.indexvideo')->with('galeri', $galeri);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoriGaleri = KategoriGaleri::all();
        return view('admin.galeri.create')->with('kategoriGaleri', $kategoriGaleri);
    }
    public function createvideo()
    {
        $kategoriGaleri = KategoriGaleri::all();
        return view('admin.galeri.createvideo')->with('kategoriGaleri', $kategoriGaleri);
    }

    function videostore(Request $request) {
        $video = new galeriVideo();
        $video->kategori_galeri_id = $request->gallery_kategori;
        $video->judul_galeri_video = $request->judul_galeri_video;
        $video->link = $request->link;
        $video->save();
        return redirect()->route('gallery.video.index');
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
    public function show(Galeri $galeri)
    {
        return view('admin.galeri.show')->with('galeri',$galeri);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        $kategoriGaleri = KategoriGaleri::all();
        return view('admin.galeri.edit')->with('kategoriGaleri',$kategoriGaleri)->with('galeri',$galeri);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        $galeri->judul_galeri = $request->gallery_title;
        $galeri->kategori_galeri_id = $request->gallery_kategori;
        if ($request->status_thumbnail == 'new') {
            Storage::delete($galeri->path);
            $path = $request->file('upload_image')->storeAs('gallery', $request->gallery_title . '.' . $request->file('upload_image')->extension());
            $galeri->path = $path;
        }
        $galeri->save();
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        Storage::delete($galeri->path);
        $galeri->delete();
        return redirect()->route('gallery.index');
    }
    public function destroyvideo(galeriVideo $galerivideo)
    {
        $galerivideo->delete();
        return redirect()->route('gallery.video.index');
    }
}
