@extends('layouts.dashboard.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                {{ $galeri->judul_galeri }}
            </h5>
            <p>Kategori : {{ $galeri->kategori_galeri->judul_kategori }}</p>
            <img src="{{ asset('storage/'.$galeri->path) }}" alt="" class="img-thumbnail">
        </div>
    </div>
@endsection