<?php

use App\DashboardMenu;
use Illuminate\Database\Seeder;

class DashboardMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = collect([
            'Dashboard',
            'Info Kelurahan',
            'Kependudukan',
            'Manajemen Surat',
            'Manajemen Artikel',
            'Manajemen Pengaduan',
            'Manajemen Menu',
            'Manajemen Pengguna',
            'Layanan',
            'Kegiatan Masyarakat'
        ]);

        $menus->each(function ($menu) {
            DashboardMenu::create([
                'menu' => $menu
            ]);
        });
    }
}
