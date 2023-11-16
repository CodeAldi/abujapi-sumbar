<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icon -->
    <link rel="icon" href="{{ asset('assets/img/icon.png') }}">
    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:300,300i,900|roboto:100" rel="stylesheet" />
    <!-- Styles -->
    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Icons -->
    <!-- BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    {{-- logo start --}}
    <div class="logo">
        <div class="container-sm">
            <img src="{{ asset('assets/img/header.png') }}" class="my-2" alt="" width="100%" class="mx-auto">
        </div>
    </div>
    {{-- logo end --}}
    {{-- navbar start --}}
    @include('layouts.partials.nvabar')
    {{-- navbar end --}}
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
                <img src="{{ asset('assets/img/slide 1.jpg') }}"
                    class="d-block w-100 object-fit-cover" alt="..." height="600px">
                <div class="carousel-caption d-none d-sm-block rounded-pill" style="background: rgba(0, 0, 0, 0.288)">
                    <h5>MUSDA 1 BPD ABUJAPI SUMATERA BARAT</h5>
                    {{-- <p>Some representative placeholder content for the first slide.</p> --}}
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/slide 2.jpg') }}"
                    class="d-block w-100 object-fit-cover" alt="..." height="600px">
                <div class="carousel-caption d-none d-sm-block rounded-pill" style="background: rgba(0, 0, 0, 0.288)">
                    <h5>MUSDA 1 BPD ABUJAPI SUMATERA BARAT</h5>
                    {{-- <p>Some representative placeholder content for the second slide.</p> --}}
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/slide 3.jpg') }}"
                    class="d-block w-100 object-fit-cover" alt="..." height="600px">
                <div class="carousel-caption d-none d-sm-block rounded-pill" style="background: rgba(0, 0, 0, 0.288)">
                    <h5>RAPAT KERJA DAERAH DAN FGD ABUJAPI SUMATERA BARAT</h5>
                    {{-- <p>Some representative placeholder content for the third slide.</p> --}}
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- carousel end --}}
    {{-- content start --}}
    <div class="container my-2">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="title pb-2 text-decoration">
                    <h1 class="ald text-oren fw-bold">
                        Keangotaan
                    </h1>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptatem error totam recusandae
                    debitis sed dolore aliquid maiores qui. Possimus quaerat saepe consectetur, amet esse inventore sint
                    explicabo assumenda eveniet dicta eaque libero earum quia non modi, ea dolor facilis, maiores
                    molestiae quisquam? Nulla ducimus optio deleniti aliquid illum eum! ... <a href="#"
                        class="text-oren fw-semibold text-decoration-none">Selengkapnya</a></p>
            </div>
            <div class="col-md-6">
                <div class="title pb-2 text-decoration">
                    <h1 class="ald text-oren fw-bold">
                        Kenapa Abujapi
                    </h1>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias culpa assumenda, explicabo dolores
                    corporis, aut quas dolorem quasi pariatur rem distinctio. Accusantium cumque expedita maiores
                    corrupti, in maxime labore eos perferendis natus fugiat a provident delectus quaerat impedit
                    explicabo placeat. Blanditiis nam atque facere repudiandae amet adipisci nostrum temporibus aut. <a
                        href="#" class="text-oren fw-semibold text-decoration-none">Selengkapnya</a></p>
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
    {{-- content end --}}
    {{-- footer start --}}
    <div class="container-fluid mt-3 text-white" style="background: rgba(35, 33, 33, 0.89)">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 mb-3">
                    <h5>ABUJAPI SUMBAR</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link text-white p-0 ">ALAMAT :</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link text-white p-0 ">Telp</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link text-white p-0 ">Email</a></li>
                    </ul>
                </div>

                <div class="col-6 mb-3">
                    <h5>Media Sosial</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link text-white p-0 ">Facebook</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link text-white p-0 ">Instagram</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link text-white p-0 ">Youtube</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link text-white p-0 ">Tiktok</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link text-white p-0 ">Twitter</a></li>
                    </ul>
                </div>


            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between border-top">
                <p>© 2023 Company, Inc. All rights reserved.</p>
            </div>
        </footer>
    </div>
    {{-- footer end --}}

    <!-- sciprt/js -->
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>