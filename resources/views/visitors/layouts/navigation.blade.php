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
                <li class="{{ request()->is('/') ? "active" : "" }}">
                    <a href="{{ route('visitors.beranda.index') }}">Beranda</a>
                </li>
                <li class="{{ request()->is('artikel') ? "active" : "" }}">
                    <a href="{{ route('visitors.artikel.index') }}">Artikel</a>
                </li>
                <li class="drop-down{{ request()->is('profil-desa/administratif') ? " active" : "" }}">
                    <a href="">Profil Desa</a>
                    <ul>
                        {{-- <li><a href="">Sejarah</a></li>
                        <li><a href="">Visi Misi</a></li>
                        <li><a href="">Struktur Pemerintahan</a></li> --}}
                        <li><a href="#">Sejarah dan Visi Misi</a></li>
                        <li><a href="#">Struktur Pemerintahan</a></li>
                        <li><a href="{{ route('visitors.profil_desa.administratif.index') }}">Administratif</a></li>
                    </ul>
                </li>
                <li class="drop-down{{ request()->is('kegiatan-masyarakat') ? " active" : "" }}">
                    <a href="">Kegiatan Masyarakat</a>
                    <ul>
                        <li><a href="">UMKM Masyarakat</a></li>
                        <li><a href="">Kegiatan Pemuda</a></li>
                    </ul>
                </li>
                {{-- <li class="drop-down{{ request()->is('administratif') ? " active" : "" }}"><a
                    href="/administratif">Administratif</a>
                <ul>
                    <li><a href="">Data Pendidikan</a></li>
                    <li><a href="">Data Pekerjaan</a></li>
                    <li><a href="">Data Agama</a></li>
                    <li><a href="">Data Jenis Kelamin</a></li>
                    <li><a href="">Data Umur</a></li>
                </ul>
                </li> --}}
                <?php
                function activePelayanan($urlPath)
                {
                    if ($urlPath == 'pelayanan/pengajuan-surat' || $urlPath == 'pelayanan/pengaduan' || $urlPath == 'pelayanan/kontributor') {
                        return ' active';
                    }
                }
                ?>
                <li class="drop-down{{ activePelayanan(request()->path()) }}">
                    <a href="{{ route('visitors.pelayanan.pengajuan-surat') }}">Pelayanan</a>
                    <ul>
                        <li><a href="{{ route('visitors.pelayanan.pengajuan-surat') }}">Pengajuan Surat</a></li>
                        <li><a href="">Pengaduan</a></li>
                        <li><a href="">Kontributor</a></li>
                    </ul>
                </li>

                @guest
                <li class="btn-register"><a href="{{ route('register') }}">Register</a></li>
                <li class="btn-login"><a href="{{ route('login') }}">Login</a></li>
                @else
                <li class="drop-down ml-5">
                    {{-- <a href="">{{ Auth::user()->name }}</a> --}}
                    <a href="">Hi, Farrel</a>
                    {{-- <img src="https://www.pexels.com/photo/man-wearing-black-shirt-3211476/" alt=""
                        class="img-fluid rounded-circle" width="10%"> --}}
                    <ul>
                        <li><a href="">Dashboard</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </li>
                @endguest
            </ul>
        </nav>
        <!-- .nav-menu -->

    </div>
</header>
