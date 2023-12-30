@extends('layouts.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Upload Galeri</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('gallery.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul item</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="gallery_title"
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
                <label for="formFile" class="form-label">Upload Photo or Videos</label>
                <input class="form-control" type="file" accept="image/*" id="formFile" name="upload_image" />
            </div>
            <div>
                <button type="reset" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
    </div>

    @if ($errors->any())
    <div class="bs-toast toast show bg-danger toast-placement-ex m-2 top-0 end-0" role="alert" aria-live="assertive" aria-atomic="true"
        data-delay="2000">
        <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">Gagal</div>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            @foreach ($errors->all() as $item)
                <span>{{ $item }}</span><br>
            @endforeach
        </div>
    </div>
    @endif

</div>
@endsection
@push('page-js')
<script src="{{ asset('assets/js/form-basic-inputs.js') }}"></script>
@endpush