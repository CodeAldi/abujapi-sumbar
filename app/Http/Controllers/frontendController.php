<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\View\View;

class frontendController extends Controller
{
    public function beranda() : View {
        $berita = Berita::latest()->take(6)->get();
        return view('frontend.beranda')->with('berita',$berita);
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
        $berita = Berita::latest()->get();
        return view('frontend.berita')
        ->with('berita',$berita);
    }
    public function beritabaca($slug) : View{
        $berita = Berita::where('slug','like',$slug)->get();
        return view('frontend.berita.baca')->with('berita', $berita);
    }

    public function keanggotaan() : View {
        return view('frontend.keanggotaan');
    }

    public function kegiatan() : View {
        return view('frontend.kegiatan');
    }

    public function galeriphoto() : View {
        return view('frontend.galeriphoto');
    }

    public function galerivideo() : View {
        return view('frontend.galerivideo');
    }
    
    public function hubungikami() : View {
        return view('frontend.hubungikami');
    }
}
