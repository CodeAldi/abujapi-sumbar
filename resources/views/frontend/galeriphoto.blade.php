@extends('layouts.main')
@section('content')
<div class="container">
    <h1 class="text-secondary text-center text-capitalize mt-5 text-decoration-underline">Galeri Photo</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 mb-5">
        @forelse ($galeri_photo as $item)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $item->judul_galeri }}</h4>
                    <a href="#myModal{{ $loop->iteration }}" data-bs-toggle="modal">
                        <img class="card-img-top img-fluid" src="{{ asset('storage/'.$item->path) }}" />
                    </a>
                    </form>
                </div>
            </div>
        </div>
        @empty
        
        @endforelse
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $galeri_photo->links('pagination.my-pagination') }}
    </div>
    <!-- Vertically centered modal -->
    @forelse ($galeri_photo as $item)
    <div class="modal" tabindex="-1" id="myModal{{ $loop->iteration }}">
        <div class="modal-dialog modal-lg modal-dialog-centered" >
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $item->judul_galeri }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('storage/'.$item->path) }}" />
                </div>
            </div>
        </div>
    </div>
    @empty
    @endforelse
</div>
@endsection