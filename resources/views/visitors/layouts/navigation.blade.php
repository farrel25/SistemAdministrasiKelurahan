<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1 class="text-light text-uppercase">
                <a href="{{ route('visitors.beranda.index') }}">
                    <span>Kelurahan</span>
                </a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="{{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ route('visitors.beranda.index') }}">Beranda</a>
                </li>
                <li class="{{ request()->is('artikel') ? 'active' : '' }}">
                    <a href="{{ route('visitors.artikel.index') }}">Artikel</a>
                </li>
                <?php
                function activeProfilDesa($urlPath)
                {
                    if ($urlPath == 'profil-desa/sejarah-visi-misi' || $urlPath == 'profil-desa/struktur-pemerintahan' || $urlPath == 'profil-desa/administratif') {
                        return ' active';
                    }
                }
                ?>
                <li class="drop-down{{ activeProfilDesa(request()->path()) }}">
                    <a href="">Profil Desa</a>
                    <ul>
                        <li><a href="#">Sejarah dan Visi Misi</a></li>
                        <li><a href="#">Struktur Pemerintahan</a></li>
                        <li>
                            <a href="{{ route('profil-desa.administratif.jenis-kelamin') }}">Administratif</a>
                        </li>
                    </ul>
                </li>
                <li class="drop-down{{ request()->is('kegiatan-masyarakat') ? 'active' : '' }}">
                    <a href="">Kegiatan Masyarakat</a>
                    <ul>
                        <li><a href="{{ route('visitors.kegiatan_masyarakat.umkm.index') }}">UMKM Masyarakat</a></li>
                        <li><a href="">Kegiatan Pemuda</a></li>
                    </ul>
                </li>
                <?php
                function activePelayanan($urlPath)
                {
                    if ($urlPath == 'pelayanan/pengajuan-surat' || $urlPath == 'pelayanan/pengaduan' || $urlPath == 'pelayanan/kontributor') {
                        return ' active';
                    }
                }
                ?>
                <li class="drop-down{{ activePelayanan(request()->path()) }}">
                    <a href="{{ route('pengajuan-surat.create') }}">Pelayanan</a>
                    <ul>
                        <li><a href="{{ route('pengajuan-surat.create') }}">Pengajuan Surat</a></li>
                        <li><a href="">Pengaduan</a></li>
                        <li><a href="">Kontributor</a></li>
                    </ul>
                </li>

                @guest
                <li class="btn-register"><a href="{{ route('register') }}">Register</a></li>
                <li class="btn-login"><a href="{{ route('login') }}">Login</a></li>
                @else
                <?php
                $name = explode(' ', Auth::user()->full_name);
                $nickname = $name[0];
                ?>
                <li class="drop-down ml-5">
                    {{-- <a href="#">Hi, {{ Auth::user()->full_name }}</a> --}}
                    <a href="#">Hai, {{ $nickname }}</a>
                    <ul>
                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
                @endguest
            </ul>
        </nav>
        <!-- .nav-menu -->

    </div>
</header>