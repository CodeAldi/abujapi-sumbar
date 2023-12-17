@extends('layouts.main')
@section('content')
<div class="container mt-4">
    <h1 class="text-center">
        Kegiatan
    </h1>
    <hr>
    {{ $kegiatan->links('vendor.pagination.bootstrap-5') }}
    @forelse ($kegiatan as $item)
    <img src="{{ asset('storage/'.$item->thumbnail) }}" class="d-block mx-auto img-fluid" alt="">
    <h2>{{ $item->judul_kegiatan }}</h2>
    <h6>admin | {{ date_format($item->updated_at, 'd-M-Y H:i:s') }} wib | {{ $item->kategori_kegiatan->judul_kategori }}
    </h6>
    <p class="mt-2">
        {{ Str::limit(strip_tags($item->body),600, '...') }} <a href="{{ route('kegiatan.baca',['slug'=>$item->slug]) }}"
            class="text-oren fw-bold">Selengkapnya</a>
    </p>
    <hr>
    @empty

    @endforelse
    {{ $kegiatan->links('vendor.pagination.bootstrap-5') }}
</div>
@endsection