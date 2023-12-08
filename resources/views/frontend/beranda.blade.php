@extends('layouts.main')
@section('content')
    {{-- carousel start --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/slide 1.jpg') }}" class="d-block w-100 object-fit-cover" alt="..."
                    height="600px">
                <div class="carousel-caption d-none d-sm-block rounded-pill" style="background: rgba(0, 0, 0, 0.288)">
                    <h5>MUSDA 1 BPD ABUJAPI SUMATERA BARAT</h5>
                    {{-- <p>Some representative placeholder content for the first slide.</p> --}}
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/slide 2.jpg') }}" class="d-block w-100 object-fit-cover" alt="..."
                    height="600px">
                <div class="carousel-caption d-none d-sm-block rounded-pill" style="background: rgba(0, 0, 0, 0.288)">
                    <h5>MUSDA 1 BPD ABUJAPI SUMATERA BARAT</h5>
                    {{-- <p>Some representative placeholder content for the second slide.</p> --}}
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/slide 3.jpg') }}" class="d-block w-100 object-fit-cover" alt="..."
                    height="600px">
                <div class="carousel-caption d-none d-sm-block rounded-pill" style="background: rgba(0, 0, 0, 0.288)">
                    <h5>RAPAT KERJA DAERAH DAN FGD ABUJAPI SUMATERA BARAT</h5>
                    {{-- <p>Some representative placeholder content for the third slide.</p> --}}
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- carousel end --}}
    <div class="container my-2">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="title pb-2 text-decoration">
                    <h1 class="ald text-oren fw-bold">
                        Tentang ABUJAPI
                    </h1>
                </div>
                <p style="text-align: justify">Asosiasi Badan Usaha Jasa Pengamanan Indonesia (ABUJAPI) merupakan Wadah
                    Organisasi bagi Perusahaan
                    Badan Usaha Jasa
                    Pengamanan (BUJP) di Indonesia.
                    Peran ABUJAPI :
                </p>
                <ol>
                    <li>Mitra Pemerintah/ Kepolisian Negara Republik Indonesia dalam menetapkan kualifikasi perusahaan
                        bidang jasa pengamanan
                        dan peningkatan mutu serta kompetensi sumber daya manusia yang mengoperasionalkan BUJP.</li>
                    <li>Mewujudkan kondisi KAMTIBMAS yang mendukung tatanan perekonomian nasional.</li>
                </ol>
            </div>
            <div class="col-md-6">
                <div class="title pb-2 text-decoration">
                    <h1 class="ald text-oren fw-bold">
                        Kenapa ABUJAPI ?
                    </h1>
                </div>
                <p style="text-align: justify">
                    ABUJAPI sebagai salah satu wadah tempat berkumpulnya pelaku usaha jasa keamanan Indonesia, yang
                    senantiasa diharapkan
                    mampu menampilkan aktivitas yang dapat menampung aspirasi dan kepentingan para anggotanya. Terutama
                    pada sektor bidang
                    jasa pengamanan (Security).Secara lebih luas bahwa ABUJAPI menjadi harapan semua anggota dan
                    komunitas security
                    Indonesia untuk dapat memberikan sumbangsih ide pemikiran serta kebijakan pada dunia usaha.
                </p>
                <p>ABUJAPI Sebagai Mitra Pemerintahan/Kepolisian Negara Republik Indonesia dalam menetapan kualifikasi
                    perusahaan bidang
                    pengamanan dan pengawasan standar peningkatan mutu. Menjadi pusat informasi, konsultasi, advokasi
                    dan fasilitasi
                    pengusaha jasa pengamanan berikut unsur didalamnya.</p>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <div class="title pb-2 text-decoration">
                    <h1 class="ald text-oren fw-bold">
                        MUSDA 1 BPD ABUJAPI SUMATERA BARAT
                    </h1>
                </div>
                <div class="mt-2">
                    <img src="{{ asset('assets/img/slide 1.jpg') }}" alt="" class="img-fluid img-thumbnail">
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <div class="title pb-2 text-decoration">
                    <h1 class="ald text-oren fw-bold">
                        Berita Terbaru
                    </h1>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                    @forelse ($berita as $item)
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('storage/'.$item->thumbnail) }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->judul_berita }}</h5>
                                <p class="card-text">{{ $item->short }} <a href="{{ route('berita.baca',['slug'=>$item->slug]) }}" class="text-oren fw-bold">Selengkapnya</a></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">admin | {{ date_format($item->updated_at, 'd-M-Y H:i:s') }} wib</small>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/img/news-thumbnail/pengukuhan bpd abujapi sumbar.jpg') }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Musda 1 BPD Abujapi Sumbar</h5>
                                <p class="card-text">BPD ABUJAPI SUMATERA BARAT DIKUKUHKAN PADA 6 APRIL 2021 DI HOTEL KYRIAD BUMI MINANG PADANG.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">by admin</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/img/news-thumbnail/fgd biro pengadaan barang dan jasa sumbar bersama bpd abujapi sumbar.jpg') }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">FGD BPD Abujapi Sumbar Bersama Biro pengadaan Barang dan Jasa Sumatera Barat</h5>
                                <p class="card-text">FGD BPD Abujapi Sumbar Bersama dan Difasilitasi oleh Biro pengadaan Barang dan Jasa Sumatera Barat</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">by admin</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/img/news-thumbnail/Disnakertrans Sumbar.jpg') }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pembahasan PP 35 beserta Regulasi Terkait bersama Dinas Tenaga Kerja Transmigrasi Sumatera Barat</h5>
                                <p class="card-text">Surat Edaran oleh Pemda (Disnakertrans Sumbar) terkait Himbauan dana kompensasi kepada Perusahaan pengguna jasa Satpam
                                se-Sumatera Barat</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">by admin</small>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
            <div class="muat mt-3">
                <a href="#" class="btn d-block mx-auto text-white rounded-pill" style="background-color: #eaa742;">Muat Lebih
                    Banyak</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="title pb-2 text-decoration">
                    <h1 class="ald text-oren fw-bold">
                        Kegiatan
                    </h1>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/img/news-thumbnail/musda bpd abujapi sumbar.jpg') }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Musda dan Pelantikan Pengurus BPD Abujapi sumbar periode 2021-2026</h5>
                                <p class="card-text">kegiatan musda 1 BPD sumbar pada tanggal 06 april 2021 dan pelantikan pengurus bpd abujapi sumbar periode 2021-2026</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">by admin</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/img/news-thumbnail/hut satpam.jpg') }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Hut Satpam ke-42</h5>
                                <p class="card-text">Hut Satpam ke-42 </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">by admin</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('assets/img/news-thumbnail/rakernas.jpg') }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Rapat Kerja Nasional ABUJAPI 2022 di Sumatera Barat</h5>
                                <p class="card-text">Rakernas ABUJAPI di Sumatera Barat</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">by admin</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="muat mt-3 ">
                <a href="#" class="btn d-block text-white rounded-pill" style="background-color: #eaa742;">Muat Lebih
                    Banyak</a>
            </div>
        </div>
    </div>
@endsection