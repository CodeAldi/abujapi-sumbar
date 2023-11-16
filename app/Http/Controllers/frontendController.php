<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class frontendController extends Controller
{
    public function beranda() : View {
        return view('frontend.beranda');
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
        return view('frontend.berita');
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
