<nav class="navbar navbar-expand-lg" style="background: #105991;">
    <div class="container-fluid fs-5">
        <button class="navbar-toggler my-2 bg-white pill" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class='bx bx-menu'></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-oren @if(Request::RouteIs('beranda')) fw-bold active @endif" aria-current="page" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link text-oren @if(Request::RouteIs('profile.*')) fw-bold active @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile <i class='bx bx-caret-down-circle' ></i></button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('profile.organisasi') }}">Organisasi</a></li>
                        <li><a class="dropdown-item" href="{{ route('profile.visimisi') }}">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route('profile.bpd') }}">Badan Pengurus Daerah</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-oren @if(Request::RouteIs('berita.*')) fw-bold active @endif" href="{{ route('berita.all') }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-oren @if(Request::RouteIs('keanggotaan')) fw-bold active @endif" href="{{ route('keanggotaan') }}">Keanggotaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-oren @if(Request::RouteIs('kegiatan')) fw-bold active @endif" href="{{ route('kegiatan') }}">Kegiatan</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link text-oren @if(Request::RouteIs('galeri.*')) fw-bold active @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Galeri <i
                            class='bx bx-caret-down-circle'></i></button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('galeri.photo') }}">Photo</a></li>
                        <li><a class="dropdown-item" href="{{ route('galeri.video') }}">Video</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-oren @if(Request::RouteIs('hubungikami')) fw-bold active @endif" href="{{ route('hubungikami') }}">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>