@extends('layouts.dashboard.main')
@push('page-css')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endpush
@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Tulis Berita</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('berita.berita.update',['berita'=>$berita]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="judul_berita">Judul Berita</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul_berita" name="judul_berita"
                        value="{{ $berita->judul_berita }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label for="kategori_berita_id" class="col-sm-2 col-form-label">Kategori Berita</label>
                <div class="col-sm-10">
                    <select class="form-select" id="kategori_berita_id" name="kategori_berita_id"
                        aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        @forelse ($kategoriBerita as $item)
                        <option value="{{ $item->id }}" @if($berita->kategori_berita_id == $item->id) selected @endif>{{
                            $item->judul_kategori }}</option>
                        @empty
                        <option class="bg-warning text-white">No Data</option>
                        @endforelse
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="thumbnail" class="col-sm-2 col-form-label" >Thumbnail</label>
                <div class="col-sm-10 position-relative">
                    <button type="button" onclick="hapusgambar()" id="tombolhapus" class="position-absolute btn-sm btn-danger rounded-start-2 end-0 me-4 mt-2"> <i class='bx bx-trash'></i></button>
                    <img id="gambarold" src="{{ asset('storage/'.$berita->thumbnail) }}" alt="thumbnail" class="img-fluid">
                    <div class="col-sm-12">
                        <input type="text" name="status_thumbnail" id="status_thumbnail" value="old" hidden>
                        <input class="form-control visually-hidden" type="file" accept="image/*" id="thumbnail" name="thumbnail"/>
                    </div>
                </div>
            </div>
            {{-- <div class="row mb-3">
                <label for="thumbnail" class="col-sm-2 col-form-label" >Thumbnail</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" accept="image/*" id="thumbnail" name="thumbnail" />
                </div>
            </div> --}}
            <div class="mb-3">
                <textarea id="summernote" name="body" class="form-control"></textarea>
            </div>
            <div class="row">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
<script>
    $('#summernote').summernote({
        tabsize: 2,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link']],
          ['view', ['help']]
        ]
      });
    var markupStr = '{!! $berita->body !!}';
    $('#summernote').summernote('code', markupStr);

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
@endsection