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
            'Menu Utama',
            'Info Desa',
            'Kependudukan',
            'Manajemen Surat',
            'Manajemen Artikel',
            'Manajemen Pengaduan',
            'Manajemen UMKM',
            'Manajemen Menu',
            'Manajemen Pengguna',
            'Layanan',
        ]);

        $menus->each(function ($menu) {
            DashboardMenu::create([
                'name' => $menu
            ]);
        });
    }
}
