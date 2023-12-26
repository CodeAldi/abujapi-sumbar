@extends('layouts.main')
@section('content')
<div class="container mt-5">
    <div class="atas mb-3 text-center text-break">
        <h1 class="">{{ $kegiatan[0]->judul_kegiatan }}</h1>
        <p>Admin | {{ date_format($kegiatan[0]->updated_at, 'd-M-Y H:i:s') }} WIB | {{
            $kegiatan[0]->kategori_kegiatan->judul_kategori }}</p>
    </div>
    <img src="{{ asset('storage/'.$kegiatan[0]->thumbnail) }}" alt="thumbnail-kegiatan"
        class="d-block mx-auto img-fluid img-thumbnail">
    <p>
        {!! $kegiatan[0]->body !!}
    </p>
</div>
@endsection