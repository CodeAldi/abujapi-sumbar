@extends('layouts.dashboard.main')
@section('content')
    <div class="card w-50">
        <div class="card-header">
            <h5 class="card-title">
                Video
            </h5>
        </div>
        <div class="card-body">
            <form action="{{ route('gallery.video.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul galeri</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="judul_galeri_video"
                        placeholder="Judul" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Kategori</label>
                    <select class="form-select" id="exampleFormControlSelect1" name="gallery_kategori">
                        <option selected disabled hidden>Please select....</option>
                        @forelse ($kategoriGaleri as $item)
                        <option value="{{ $item->id }}">{{ $item->judul_kategori }}</option>
                        @empty
                        <option disabled>No Data</option>
                        @endforelse
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Link Video</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="link"
                        placeholder="Judul" />
                </div>
                <div>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
@endsection