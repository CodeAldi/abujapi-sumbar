@extends('layouts.main')
@section('content')
<div class="container mt-5">
    <div class="atas mb-3 text-center">
        <h1 class="">{{ $berita[0]->judul_berita }}</h1>
        <p>Admin | {{ date_format($berita[0]->updated_at, 'd-M-Y H:i:s') }} WIB | {{ $berita[0]->kategori_berita->judul_kategori }}</p>
    </div>
    <img src="{{ asset('storage/'.$berita[0]->thumbnail) }}" alt="thumbnail-berita" class="d-block mx-auto img-fluid img-thumbnail">
    <p>
        {!! $berita[0]->body !!}
    </p>
</div>
@endsection