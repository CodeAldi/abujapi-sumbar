@extends('layouts.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Edit Galeri</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('gallery.update',['galeri'=>$galeri]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul item</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="gallery_title"
                    value="{{ $galeri->judul_galeri }}" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Kategori</label>
                <select class="form-select" id="exampleFormControlSelect1" name="gallery_kategori">
                    <option disabled hidden>Please select....</option>
                    @forelse ($kategoriGaleri as $item)
                    <option value="{{ $item->id }}" @if ($item->id == $galeri->kategori_galeri_id)
                        selected
                    @endif>{{ $item->judul_kategori }}</option>
                    @empty
                    <option disabled>No Data</option>
                    @endforelse
                </select>
            </div>
            <div class="row mb-3">
                <label for="thumbnail" class="col-sm-2 col-form-label">Upload image :</label>
                <div class="col-sm-10 position-relative">
                    <button type="button" onclick="hapusgambar()" id="tombolhapus"
                        class="position-absolute btn-sm btn-danger rounded-start-2 end-0 me-4 mt-2"> <i
                            class='bx bx-trash'></i></button>
                    <img id="gambarold" src="{{ asset('storage/'.$galeri->path) }}" alt="thumbnail" class="img-fluid">
                    <div class="col-sm-12">
                        <input type="text" name="status_thumbnail" id="status_thumbnail" value="old" hidden>
                        <input class="form-control visually-hidden" type="file" accept="image/*" id="thumbnail" name="upload_image" />
                    </div>
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-secondary">back</button>
                <button type="submit" class="btn btn-primary">Update</button>
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
    <script>
        function hapusgambar() {
        $gambar = document.getElementById("gambarold");
        $tombolhapus = document.getElementById("tombolhapus");
        $tempatinput = document.getElementById("thumbnail");
        $status = document.getElementById("status_thumbnail");
        $status.value = 'new';
        $gambar.remove();
        $tombolhapus.remove();
        $tempatinput.classList.remove('visually-hidden');
        }
    </script>
</div>
@endsection
@push('page-js')
<script src="{{ asset('assets/js/form-basic-inputs.js') }}"></script>
@endpush