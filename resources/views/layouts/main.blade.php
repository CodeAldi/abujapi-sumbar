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
    @stack('page-css')
    <!-- Icons -->
    <!-- BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    {{-- logo start --}}
    <div class="logo">
        <div class="container-sm">
            <img src="{{ asset('assets/img/header.png') }}" class="my-2 img-fluid" alt="" class="mx-auto">
        </div>
    </div>
    {{-- logo end --}}
    {{-- navbar start --}}
    @include('layouts.partials.nvabar')
    {{-- navbar end --}}
    {{-- content start --}}
    @yield('content')
    {{-- content end --}}
    {{-- footer start --}}
    @include('layouts.partials.footer')
    {{-- footer end --}}

    <!-- sciprt/js -->
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @stack('page-js')
</body>

</html>