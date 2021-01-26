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
    <div class="scrollbar-sidebar ">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu ">

                <!-- {{--
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
                    <a href="#">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Sejarah & Visi-Misi
                    </a>
                </li>
                <li>
                    <a href="#l">
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
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Jenis Kelamin
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Pendidikan
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Pekerjaan
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Agama
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Warga Negara
                            </a>
                        </li>
                        <li>
                            <a href="#">
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
                    <a href="{{ route('surat-masuk') }}">
                        <i class="metismenu-icon pe-7s-mail-open-file"></i>
                        Surat Masuk
                    </a>
                </li>
                <li>
                    <a href="{{ route('surat-keluar') }}">
                        <i class="metismenu-icon pe-7s-mail"></i>
                        Surat Keluar
                    </a>
                </li>
                <li>
                    <a href="{{ route('surat-permohonan-surat') }}">
                        <i class="metismenu-icon pe-7s-mail"></i>
                        Permohonan Surat
                    </a>
                </li>
                <li>
                    <a href="{{ route('jenis-surat') }}">
                        <i class="metismenu-icon pe-7s-keypad"></i>
                        Jenis Surat
                    </a>
                </li>
                <li>
                    <a href="{{ route('dokumen-persyaratan') }}">
                        <i class="metismenu-icon pe-7s-note2"></i>
                        Dokumen Persyaratan
                    </a>
                </li>
                <li>
                    <a href="{{ route('cetak-surat') }}">
                        <i class="metismenu-icon pe-7s-print"></i>
                        Cetak Surat
                    </a>
                </li>
                <li>
                    <a href="{{ route('panduan') }}">
                        <i class="metismenu-icon pe-7s-notebook"></i>
                        Panduan
                    </a>
                </li>

                </li>
                <li class="app-sidebar__heading">Manajemen Artikel</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-news-paper"></i>
                        Artikel

                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-network"></i>
                        Kategori
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-ribbon"></i>
                        Tag
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-chat"></i>
                        Komentar
                    </a>
                </li>

                <li class="app-sidebar__heading">Manajemen Menu</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-albums"></i>
                        Menu
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-photo-gallery"></i>
                        Sub Menu
                    </a>
                </li>

                <li class="app-sidebar__heading">Manajemen Pengguna</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-user"></i>
                        Pengguna
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-plugin"></i>
                        Role
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-paper-plane"></i>
                        Hak Akses
                    </a>
                </li>

                <li class="app-sidebar__heading">Layanan</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-mail">
                        </i> Permohonan Surat
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-hammer">
                        </i>Pengaduan
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-pen">
                        </i>Kontributor
                    </a>
                </li>

                <li class="app-sidebar__heading">Kegiatan Masyarakat</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-cart"></i>
                        UMKM
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left">
                        </i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Toko
                            </a>
                        </li>
                        <li>
                            <a href="#">
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
                </li> --}} -->

                @php
                // ambil id user yg sedang login
                // $userId = Auth::user()->id;

                // ambil role user yang sedang login berdasarkan id user
                // $userRoleId = \DB::table('model_has_roles')->where('model_id', $userId)->value('role_id');
                $userRoleId = Auth::user()->roles->pluck('id')->first();
                // dd($userRoleId);

                // ambil menu yang boleh diakses user berdasarkan role user
                // $menus = \DB::table('permissions')->select('permissions.id', 'permissions.name')
                // ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                // ->where('role_has_permissions.role_id', $userRoleId)
                // ->get();
                $menus = \DB::table('dashboard_menus')->select('dashboard_menus.id', 'dashboard_menus.menu')
                ->join('role_has_permissions', 'dashboard_menus.id', '=', 'role_has_permissions.permission_id')
                ->where('role_has_permissions.role_id', $userRoleId)
                ->get();
                @endphp

                @foreach ($menus as $menu)
                <li class="app-sidebar__heading ">{{ $menu->menu }}</li>

                <?php
                // $subMenus = DB::table('dashboard_sub_menus')
                //     ->join('permissions', 'dashboard_sub_menus.menu_id', '=', 'permissions.id')
                //     ->where('dashboard_sub_menus.menu_id', $menu->id)
                //     ->get();
                $subMenus = DB::table('dashboard_sub_menus')
                    ->join('dashboard_menus', 'dashboard_sub_menus.menu_id', '=', 'dashboard_menus.id')
                    ->where('dashboard_sub_menus.menu_id', $menu->id)
                    ->get();
                ?>
                @foreach ($subMenus as $subMenu)
                <?php
                        $paths = Request::segments();
                        $path = '';
                        foreach ($paths as $p) {
                            $path .= '/' . $p;
                        }
                    ?>
                <li>
                    <a href="{{ $subMenu->url_path }}" class="{{ $path == $subMenu->url_path ? 'mm-active':'' }}">
                        <i class="{{ $subMenu->icon }}"></i>
                        {{ $subMenu->sub_menu }}
                        @if ($subMenu->sub_menu == 'UMKM')
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        @endif
                    </a>
                    @if ($subMenu->sub_menu == 'UMKM')
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon">
                                </i>Toko
                            </a>
                        </li>
                        <li>
                            <a href="#">
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
