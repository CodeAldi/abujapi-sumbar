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
                    <div class="col">
                        <div class="card">
                            <img src="https://abujapi.or.id/wp-admin/public/uploads/post/WhatsApp_Image_2023-08-12_at_18.52.41.jpeg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://abujapi.or.id/wp-admin/public/uploads/post/WhatsApp_Image_2023-08-12_at_18.52.41.jpeg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://abujapi.or.id/wp-admin/public/uploads/post/WhatsApp_Image_2023-08-12_at_18.52.41.jpeg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional
                                    content.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://abujapi.or.id/wp-admin/public/uploads/post/WhatsApp_Image_2023-08-12_at_18.52.41.jpeg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://abujapi.or.id/wp-admin/public/uploads/post/WhatsApp_Image_2023-08-12_at_18.52.41.jpeg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://abujapi.or.id/wp-admin/public/uploads/post/WhatsApp_Image_2023-08-12_at_18.52.41.jpeg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
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
                            <img src="https://abujapi.or.id/wp-admin/public/uploads/post/IMPLEMENTASI.jpeg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to
                                    additional
                                    content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://abujapi.or.id/wp-admin/public/uploads/post/IMPLEMENTASI.jpeg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to
                                    additional
                                    content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://abujapi.or.id/wp-admin/public/uploads/post/IMPLEMENTASI.jpeg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to
                                    additional
                                    content.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://abujapi.or.id/wp-admin/public/uploads/post/IMPLEMENTASI.jpeg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to
                                    additional
                                    content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://abujapi.or.id/wp-admin/public/uploads/post/IMPLEMENTASI.jpeg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to
                                    additional
                                    content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="https://abujapi.or.id/wp-admin/public/uploads/post/IMPLEMENTASI.jpeg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to
                                    additional
                                    content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
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