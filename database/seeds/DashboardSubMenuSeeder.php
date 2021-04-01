<?php

use App\DashboardSubMenu;
use Illuminate\Database\Seeder;

class DashboardSubMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menuId = [1, 1, 2, 2, 2, 2, 3, 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 5, 6, 7, 7, 8, 8, 8, 9, 9, 9, 10, 10];
        $subMenus = [
            // 1
            'Dashboard',
            'Kembali Ke Beranda',
            // 2
            'Identitas Kelurahan',
            'Kepengurusan Kelurahan',
            'Wilayah',
            'Data Administratif',
            // 3
            'Penduduk',
            // 4
            'Surat Masuk',
            'Surat Keluar',
            'Pengajuan Surat',
            'Jenis Surat',
            'Dokumen Persyaratan',
            'Cetak Surat',
            'Panduan',
            // 5
            'Artikel',
            'Kontribusi Artikel',
            'Kategori',
            // 'Tag',
            'Komentar',
            // 6
            'Data pengaduan',
            // 7
            'Menu',
            'Sub Menu',
            // 8
            'Pengguna',
            'Role dan Hak Akses',
            'Log Aktivitas Pengguna',
            // 9
            'Pengajuan Surat',
            'Pengaduan',
            'Kontributor',
            // 10
            'UMKM',
            'Kegiatan Desa'
        ];

        $urlPath = [
            // 1
            '/dashboard',
            '/',
            //  2
            '/dashboard/info-kelurahan/identitas',
            '/dashboard/info-kelurahan/kepengurusan',
            '/dashboard/info-kelurahan/wilayah',
            '/dashboard/info-kelurahan/data-administratif',
            // 3
            '/dashboard/kependudukan/penduduk',
            // 4
            '/dashboard/manajemen-surat/surat-masuk',
            '/dashboard/manajemen-surat/surat-keluar',
            '/dashboard/manajemen-surat/pengajuan-surat',
            '/dashboard/manajemen-surat/jenis-surat',
            '/dashboard/manajemen-surat/dokumen-persyaratan',
            '/dashboard/manajemen-surat/cetak-surat',
            '/dashboard/manajemen-surat/panduan',
            // 5
            '/dashboard/manajemen-artikel/artikel',
            '/dashboard/manajemen-artikel/kontribusi',
            '/dashboard/manajemen-artikel/kategori',
            '/dashboard/manajemen-artikel/komentar',
            // 6
            '/dashboard/manajemen-pengaduan/data-pengaduan',
            // 7
            '/dashboard/manajemen-menu/menu',
            '/dashboard/manajemen-menu/sub-menu',
            // 8
            '/dashboard/manajemen-pengguna/pengguna',
            '/dashboard/manajemen-pengguna/role',
            '/dashboard/manajemen-pengguna/log-aktivitas',
            // 9
            '/dashboard/layanan/pengajuan-surat',
            '/dashboard/layanan/pengaduan',
            '/dashboard/layanan/kontributor',
            // 10
            '/dashboard/kegiatan-masyarakat/umkm',
            '/dashboard/kegiatan-masyarakat/kegiatan-desa',
        ];

        $icons = [
            // 1
            'metismenu-icon pe-7s-rocket',
            'metismenu-icon pe-7s-home',
            // 2
            'metismenu-icon pe-7s-culture',
            'metismenu-icon pe-7s-id',
            // 'metismenu-icon pe-7s-display2',
            'metismenu-icon pe-7s-map',
            'metismenu-icon pe-7s-copy-file',
            // 3
            'metismenu-icon pe-7s-users',
            // 4
            'metismenu-icon pe-7s-mail-open-file',
            'metismenu-icon pe-7s-mail',
            'metismenu-icon pe-7s-mail',
            'metismenu-icon pe-7s-keypad',
            'metismenu-icon pe-7s-note2',
            'metismenu-icon pe-7s-print',
            'metismenu-icon pe-7s-notebook',
            // 5
            'metismenu-icon pe-7s-news-paper',
            'metismenu-icon pe-7s-upload',
            'metismenu-icon pe-7s-network',
            // 'metismenu-icon pe-7s-ribbon',
            'metismenu-icon pe-7s-chat',
            // 6
            'metismenu-icon pe-7s-hammer',
            // 7
            'metismenu-icon pe-7s-albums',
            'metismenu-icon pe-7s-photo-gallery',
            // 8
            'metismenu-icon pe-7s-user',
            'metismenu-icon pe-7s-plugin',
            'metismenu-icon pe-7s-note2',
            // 9
            'metismenu-icon pe-7s-mail',
            'metismenu-icon pe-7s-hammer',
            'metismenu-icon pe-7s-pen',
            // 10
            'metismenu-icon pe-7s-cart',
            'metismenu-icon pe-7s-bicycle'
        ];

        for ($i = 0; $i < count($menuId); $i++) {
            DashboardSubMenu::create([
                'menu_id' => $menuId[$i],
                'sub_menu' => $subMenus[$i],
                'url_path' => $urlPath[$i],
                'icon' => $icons[$i],
                'is_active' => 1
            ]);
        }
    }
}
