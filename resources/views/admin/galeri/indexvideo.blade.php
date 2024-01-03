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
                <p>Kategori : {{ $item->kategori_galeri->judul_kategori }}</p>
                <iframe src="{{ 'https://www.youtube.com/embed/'.$item->link }}"  frameborder="0"></iframe>
                <p class="mt-2">Action : </p>
                <a href="{{ route('gallery.show',['galeri'=>$item]) }}" class="btn btn-success rounded-pill btn-icon">
                    <span class="tf-icons bx bx-show"></span>
                </a>
                <a href="#updatemodal{{ $loop->iteration }}" data-bs-toggle='modal' class="btn btn-dark rounded-pill btn-icon">
                    <span class="tf-icons bx bx-pencil"></span>
                </a>
                <form action="{{ route('gallery.video.destroy',['galerivideo'=>$item]) }}" method="post" class="d-inline">
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

@foreach ($galeri as $item)
<div class="modal fade" id="updatemodal{{ $loop->iteration }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahsingleTitle">Edit Galeri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gallery.video.update',['galeri'=>$item]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <label for="badan_usaha" class="form-label">Judul Galeri</label>
                            <input type="text" id="badan_usaha" name="judul_galeri_video" class="form-control"
                                value="{{ $item->judul_galeri_video }}" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Kategori</label>
                        <select class="form-select" id="exampleFormControlSelect1" name="gallery_kategori">
                            <option selected disabled hidden>Please select....</option>
                            @forelse ($kategoriGaleri as $itemgaleri)
                            <option value="{{ $itemgaleri->id }}" @if ($itemgaleri->id == $item->kategori_galeri_id) selected @endif>
                                {{ $itemgaleri->judul_kategori }}</option>
                            @empty
                            <option disabled>No Data</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ID Youtube Video</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="link"
                            value = "{{ $item->link }}" />
                        <div class="form-text">contoh https://www.youtube.com/watch?v=qRODifJWIwE</div>
                        <div class="form-text">id video nya adalah qRODifJWIwE</div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Update Galeri Video</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach