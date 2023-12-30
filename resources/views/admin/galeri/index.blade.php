@extends('layouts.dashboard.main')
@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    @forelse ($galeri as $item)
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $item->judul_galeri }}</h4>
                <img class="card-img-top" src="{{ asset('storage/'.$item->path) }}" />
                <p class="mt-2">Action : </p>
                <a href="{{ route('gallery.show',['galeri'=>$item]) }}" class="btn btn-success rounded-pill btn-icon">
                    <span class="tf-icons bx bx-show"></span>
                </a>
                <a href="{{ route('gallery.edit',['galeri'=>$item]) }}" class="btn btn-dark rounded-pill btn-icon">
                    <span class="tf-icons bx bx-pencil"></span>
                </a>
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