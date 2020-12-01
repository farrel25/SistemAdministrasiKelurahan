<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1 class="text-light text-uppercase"><a href="/"><span>Kelurahan</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="{{ request()->is('/') ? "active" : "" }}"><a href="/">Beranda</a></li>
                <li class="{{ request()->is('artikel') ? "active" : "" }}"><a href="/artikel">Artikel</a></li>
                <li class="drop-down{{ request()->is('profildesa') ? " active" : "" }}"><a href="/profildesa">Profil
                        Desa</a>
                    <ul>
                        <li><a href="">Sejarah</a></li>
                        <li><a href="">Visi Misi</a></li>
                        <li><a href="">Struktur Pemerintahan</a></li>
                    </ul>
                </li>
                <li class="drop-down{{ request()->is('administratif') ? " active" : "" }}"><a
                        href="/administratif">Administratif</a>
                    <ul>
                        <li><a href="">Data Pendidikan</a></li>
                        <li><a href="">Data Pekerjaan</a></li>
                        <li><a href="">Data Agama</a></li>
                        <li><a href="">Data Jenis Kelamin</a></li>
                        <li><a href="">Data Umur</a></li>
                    </ul>
                </li>
                <?php
                function activePelayanan($urlPath)
                {
                    # code...
                    if ($urlPath == 'pelayanan/pengajuan-surat' || $urlPath == 'pelayanan/pengaduan' || $urlPath == 'pelayanan/kontributor') {
                        return ' active';
                    }
                }
                ?>
                <li class="drop-down{{ activePelayanan(request()->path()) }}">
                    <a href="/pelayanan/pengajuan-surat">Pelayanan</a>
                    <ul>
                        <li><a href="/pelayanan/pengajuan-surat">Pengajuan Surat</a></li>
                        <li><a href="">Pengaduan</a></li>
                        <li><a href="">Kontributor</a></li>
                    </ul>
                </li>

                <li class="btn-register"><a href="">Register</a></li>
                <li class="btn-login"><a href="">Login</a></li>
            </ul>
        </nav>
        <!-- .nav-menu -->

    </div>
</header>
