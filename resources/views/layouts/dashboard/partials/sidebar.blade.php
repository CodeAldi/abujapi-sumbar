<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">admin</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        {{--! Dashboard --}}
        <li class="menu-item @if(Request::RouteIs('dashboard')) active @endif">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboard</div>
            </a>
        </li>

        {{--! anggota --}}
        <li class="menu-item @if(Request::RouteIs('anggota.*')) active @endif">
            <a href="{{ route('anggota.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div>Anggota</div>
            </a>
        </li>

        {{--! berita --}}
        <li class="menu-item @if(Request::RouteIs('berita.*')) active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div>Berita</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item @if(Request::RouteIs('berita.kategori-berita.*')) active @endif">
                    <a href="{{ route('berita.kategori-berita.index') }}" class="menu-link">
                        <div>Kategori Berita</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::RouteIs('berita.berita.index')) active @endif">
                    <a href="{{ route('berita.berita.index') }}" class="menu-link">
                        <div>List Berita</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::RouteIs('berita.berita.create')) active @endif">
                    <a href="{{ route('berita.berita.create') }}" class="menu-link">
                        <div>Tulis Berita</div>
                    </a>
                </li>
            </ul>
        </li>
        {{--! Kegiatan --}}
        <li class="menu-item @if(Request::RouteIs('kegiatan.*')) active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-clipboard"></i>
                <div>Kegiatan</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item @if(Request::RouteIs('kegiatan.kategori-kegiatan.*')) active @endif">
                    <a href="{{ route('kegiatan.kategori-kegiatan.index') }}" class="menu-link">
                        <div>Kategori Kegiatan</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::RouteIs('kegiatan.kegiatan.index')) active @endif">
                    <a href="{{ route('kegiatan.kegiatan.index') }}" class="menu-link">
                        <div>List Kegiatan</div>
                    </a>
                </li>
                <li class="menu-item @if(Request::RouteIs('kegiatan.kegiatan.create')) active @endif">
                    <a href="{{ route('kegiatan.kegiatan.create') }}" class="menu-link">
                        <div>Tulis Kegiatan</div>
                    </a>
                </li>
            </ul>
        </li>
        
        {{--! Galeri --}}
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-images"></i>
                <div>Galeri</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link">
                        <div>Kategori Galeri</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-navbar.html" class="menu-link">
                        <div>List Galeri</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-container.html" class="menu-link">
                        <div>Tulis Galeri</div>
                    </a>
                </li>
            </ul>
        </li>
        {{--! Dokumen --}}
        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div>Dokumen</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link">
                        <div>Kategori Dokumen</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-navbar.html" class="menu-link">
                        <div>List Dokumen</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-container.html" class="menu-link">
                        <div>Tulis Dokumen</div>
                    </a>
                </li>
            </ul>
        </li> --}}
        {{-- ! logout --}}
        <li class="menu-item">
            <a href="{{ route('logout') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-log-out-circle"></i>
                <div>Logout</div>
            </a>
        </li>
    </ul>
</aside>