<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:300,300i,900" rel="stylesheet" />
    <!-- Styles -->
    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background: #105991;">
        <div class="container-fluid">
            <a class="navbar-brand bg-white rounded mx-2 my-2" href="#">
                <img src="{{ asset('assets/img/header.png') }}" alt="" width="350px" height="100%">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-oren active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-oren" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-oren" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-oren" href="#">Keangotaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-oren" href="#">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-oren" href="#">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-oren" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        
    </div>

    <!-- sciprt/js -->
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>