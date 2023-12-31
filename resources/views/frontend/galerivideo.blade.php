@extends('layouts.main')
@section('content')
<div class="container">
    <h1 class="text-secondary text-center text-capitalize mt-5 text-decoration-underline">Galeri Video</h1>
    @forelse ($galeri_video as $item)
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $item->judul_galeri_video }}</h4>
                    <iframe src="{{ 'https://www.youtube.com/embed/'.$item->link }}" frameborder="0"></iframe>
                    
                </div>
            </div>
        </div>
    </div>
    @empty
    <img src="{{ asset('assets/img/under maintenance.png') }}" alt="web under maintenance picture" class="img-fluid">
    @endforelse
    <div class="d-flex justify-content-center mt-3">
        {{ $galeri_video->links('pagination.my-pagination') }}
    </div>
</div>
@endsection