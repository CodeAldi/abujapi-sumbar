@extends('layouts.dashboard.main')
@section('content')
<div class="card mb-3">
    <div class="card-header">List video</div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    @forelse ($galeri as $item)
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $item->judul_galeri_video }}</h4>
                <iframe src="{{ $item->link }}"  frameborder="0"></iframe>
                <p class="mt-2">Action : </p>
                
                <form action="{{ route('gallery.destroy',['galeri'=>$item]) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')

                    <button type="submit" class="btn btn-danger rounded-pill btn-icon">
                        <span class="tf-icons bx bx-x"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @empty

    @endforelse
</div>
@endsection