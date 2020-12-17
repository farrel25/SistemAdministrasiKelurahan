<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
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
    <?php
    function activeSideBar($urlPath)
    {
        if ($urlPath == 'profil-desa/sejarah-visi-misi' || $urlPath == 'profil-desa/struktur-pemerintahan' || $urlPath == 'profil-desa/administratif') {
            return ' active';
        }
    }
    ?>
    <div class="scrollbar-sidebar ">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                {{-- <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'mm-active' : '' }}">
                <i class="metismenu-icon pe-7s-rocket"></i>
                Dashboard
                </a>
                </li>
                <li>
                    <a href="{{ route('visitors.beranda.index') }}">
                        <i class="metismenu-icon pe-7s-home"></i>
                        Kembali ke beranda
                    </a>
                </li>
                <li class="app-sidebar__heading">
                    Info Kelurahan
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-culture"></i>
                        Identitas Kelurahan
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Kepengurusan Kelurahan
                    </a>
                </li>
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

                <li class="app-sidebar__heading">Kependudukan</li>
                <li>
                    <a href="{{ route('penduduk') }}" class="{{ request()->is('penduduk') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Penduduk
                    </a>
                </li>

                <li class="app-sidebar__heading">Manajemen Surat</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-mail-open-file"></i>
                        Surat Masuk
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-mail"></i>
                        Surat Keluar
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-mail"></i>
                        Permohonan Surat
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-keypad"></i>
                        Jenis Surat
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-note2"></i>
                        Dokumen Persyaratan
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-print"></i>
                        Cetak Surat
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-notebook"></i>
                        Panduan
                    </a>
                </li>

                </li>
                <li class="app-sidebar__heading">Manajemen Artikel</li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-news-paper"></i>
                        Artikel

                    </a>
                </li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-network"></i>
                        Kategori
                    </a>
                </li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-ribbon"></i>
                        Tag
                    </a>
                </li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-chat"></i>
                        Komentar
                    </a>
                </li>

                <li class="app-sidebar__heading">Manajemen Menu</li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-albums"></i>
                        Menu
                    </a>
                </li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-photo-gallery"></i>
                        Sub Menu
                    </a>
                </li>

                <li class="app-sidebar__heading">Manajemen Pengguna</li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-user"></i>
                        Pengguna
                    </a>
                </li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-plugin"></i>
                        Role
                    </a>
                </li>
                <li>
                    <a href="tables-regular.html">
                        <i class="metismenu-icon pe-7s-paper-plane"></i>
                        Hak Akses
                    </a>
                </li>

                <li class="app-sidebar__heading">Layanan</li>
                <li>
                    <a href="charts-chartjs.html">
                        <i class="metismenu-icon pe-7s-mail">
                        </i> Permohonan Surat
                    </a>
                </li>
                <li>
                    <a href="charts-chartjs.html">
                        <i class="metismenu-icon pe-7s-hammer">
                        </i>Pengaduan
                    </a>
                </li>
                <li>
                    <a href="charts-chartjs.html">
                        <i class="metismenu-icon pe-7s-pen">
                        </i>Kontributor
                    </a>
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
                        <i class="metismenu-icon pe-7s-bicycle">
                        </i>Kegiatan Pemuda
                    </a>
                </li> --}}

                <?php
                $path = DB::table('dashboard_sub_menus')->get()->toArray();
                $countPath = count($path);
                // dd($path);
                // for ($i=0; $i < count($path) ; $i++) {
                //     echo $path[$i]->url_path;
                // }

                // function activeSideBar($urlPath) {
                //     for ($i=0; $i < $countPath ; $i++) {
                //         if ($path[$i]->url_path) {

                //         }
                //     }
                // }

                // function activeSideBar($urlPath)
                // {
                //     if ($urlPath == 'profil-desa/sejarah-visi-misi' || $urlPath == 'profil-desa/struktur-pemerintahan' || $urlPath == 'profil-desa/administratif') {
                //         return ' active';
                //     }
                // }
                ?>

                @foreach ($menus as $menu)
                <li class="app-sidebar__heading">{{ $menu->name }}</li>

                <?php
                $subMenus = DB::table('dashboard_sub_menus')
                ->join('permissions', 'dashboard_sub_menus.menu_id', '=', 'permissions.id')
                ->where('dashboard_sub_menus.menu_id', $menu->id)
                ->get();
                ?>

                @foreach ($subMenus as $subMenu)
                <li>
                    <a href="{{ $subMenu->url_path }}">
                        <i class="{{ $subMenu->icon }}"></i>
                        {{ $subMenu->sub_menu }}
                        @if ($subMenu->sub_menu == 'UMKM')
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        @endif
                    </a>
                    @if ($subMenu->sub_menu == 'UMKM')
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
                    @endif
                </li>
                @endforeach
                @endforeach
            </ul>
        </div>
    </div>
</div>
