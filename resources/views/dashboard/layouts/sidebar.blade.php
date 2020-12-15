<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar ">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="index.html" class="mm-active">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('visitors.beranda.index') }}" class="mm-active">
                        <i class="metismenu-icon pe-7s-home"></i>
                        Kembali ke beranda
                    </a>
                </li>
                <li class="app-sidebar__heading">Penduduk</li>
                <li>
                    <a href="{{ route('penduduk') }}">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Data Penduduk
                    </a>
                </li>
                <li>
                    <a href="{{ route('penduduk-aktif') }}">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Data Penduduk Aktif
                    </a>
                </li>
                <li class="app-sidebar__heading">Artikel</li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-pen"></i>
                        Artikel Create
                    </a>
                </li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-news-paper"></i>
                        Artikel Masuk
                    </a>
                </li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-news-paper"></i>
                        Artikel Keluar
                    </a>
                </li>
                <li class="app-sidebar__heading">Profil Desa</li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Sejarah & Visi-Misi
                    </a>
                </li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-map"></i>
                        Wilayah
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-copy-file"></i>
                        Data Administratif
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="">
                                <i class="metismenu-icon">
                                </i>Jenis Kelamin
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="metismenu-icon">
                                </i>Pendidikan
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="metismenu-icon">
                                </i>Pekerjaan
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="metismenu-icon">
                                </i>Agama
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="metismenu-icon">
                                </i>Warga Negara
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="metismenu-icon">
                                </i>Wilayah
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="app-sidebar__heading">Kegiatan Masyarakat</li>
                <li>
                    <a href="">
                        <i class="metismenu-icon pe-7s-cart"></i>
                        UMKM
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left">
                        </i>
                    </a>
                    <ul>
                        <li>
                            <a href="">
                                <i class="metismenu-icon">
                                </i>Toko
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="metismenu-icon">
                                </i>Produk
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="forms-controls.html">
                        <i class="metismenu-icon pe-7s-mouse">
                        </i>Kegiatan Pemuda
                    </a>
                </li>
                <li>
                <li class="app-sidebar__heading">Pelayanan</li>
                <li>
                    <a href="charts-chartjs.html">
                        <i class="metismenu-icon pe-7s-mail">
                        </i>Surat
                    </a>
                </li>
                <li>
                    <a href="charts-chartjs.html">
                        <i class="metismenu-icon pe-7s-graph2">
                        </i>Pengaduan
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>