<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\galeriVideo;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\View\View;

class frontendController extends Controller
{
    public function beranda() : View {
        $berita = Berita::latest()->take(3)->get();
        $kegiatan = Kegiatan::latest()->take(3)->get();
        return view('frontend.beranda')->with('berita',$berita)->with('kegiatan',$kegiatan);
    }

    public function organisasi() : View {
        return view('frontend.organisasi');
    }

    public function visimisi() : View {
        return view('frontend.visimisi');
    }

    public function bpd() : View {
        return view('frontend.bpd');
    }

    public function berita() : View {
        $berita = Berita::latest()->paginate(6);
        return view('frontend.berita')
        ->with('berita',$berita);
    }
    public function beritabaca($slug) : View{
        $berita = Berita::where('slug','like',$slug)->get();
        return view('frontend.berita.baca')->with('berita', $berita);
    }
    public function kegiatanbaca($slug): View
    {
        $kegiatan = Kegiatan::where('slug', 'like', $slug)->get();
        return view('frontend.kegiatan.baca')->with('kegiatan', $kegiatan);
    }

    public function keanggotaan() : View {
        $anggota = Anggota::all();
        return view('frontend.keanggotaan')->with('anggota',$anggota);
    }

    public function kegiatan() : View {
        $kegiatan = Kegiatan::latest()->paginate(6);
        return view('frontend.kegiatan')->with('kegiatan',$kegiatan);
    }

    public function galeriphoto() : View {
        $galeri_photo = Galeri::paginate(6);
        return view('frontend.galeriphoto')->with('galeri_photo',$galeri_photo);
    }

    public function galerivideo() : View {
        $galeri_video = galeriVideo::paginate(6);
        // dd($galeri_video)
        return view('frontend.galerivideo')->with('galeri_video',$galeri_video);
    }
    
    public function hubungikami() : View {
        return view('frontend.hubungikami');
    }
}
