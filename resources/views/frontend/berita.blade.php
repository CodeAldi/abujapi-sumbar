@extends('layouts.main')
@section('content')
<div class="container mt-4">
    <h1 class="text-center">
        Berita
    </h1>
    <hr>
    {{ $berita->links('vendor.pagination.bootstrap-5') }}
    @forelse ($berita as $item)
    <img src="{{ asset('storage/'.$item->thumbnail) }}" class="d-block mx-auto img-fluid" alt="">
        <h2>{{ $item->judul_berita }}</h2>
        <h6>admin | {{ date_format($item->updated_at, 'd-M-Y H:i:s') }} wib | {{ $item->kategori_berita->judul_kategori }}</h6>
        <p class="mt-2">
            {{ Str::limit(strip_tags($item->body),600, '...') }} <a href="{{ route('berita.baca',['slug'=>$item->slug]) }}" class="text-oren fw-bold">Selengkapnya</a>
        </p>
        <hr>
    @empty
        
    @endforelse
    {{ $berita->links('vendor.pagination.bootstrap-5') }}
</div>
@endsection