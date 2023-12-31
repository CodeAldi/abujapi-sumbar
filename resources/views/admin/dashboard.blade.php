@extends('layouts.dashboard.main')
@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    <div class="col">
        <div class="card ">
            <div class="card-body">
                <h5>Berita : {{ $berita }}</h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card ">
            <div class="card-body">
                <h5>kegiatan : {{ $kegiatan }}</h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card ">
            <div class="card-body">
                <h5>Anggota : {{ $anggota }}</h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card ">
            <div class="card-body">
                <h5>Galeri (photo) : {{ $photo }}</h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card ">
            <div class="card-body">
                <h5>Galeri (Video) : {{ $video }}</h5>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card ">
            <div class="card-body">
                <h5>Pesan masuk : {{ $pesan }}</h5>
            </div>
        </div>
    </div>
</div>
@endsection