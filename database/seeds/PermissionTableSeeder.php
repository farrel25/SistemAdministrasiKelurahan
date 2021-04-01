<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = collect([
            'Dashboard',
            'Info Desa',
            'Kependudukan',
            'Manajemen Surat',
            'Manajemen Artikel',
            'Manajemen Pengaduan',
            'Manajemen Menu',
            'Manajemen Pengguna',
            'Layanan',
            'Kegiatan Masyarakat'
        ]);

        $permissions->each(function ($permission) {
            Permission::create([
                'name' => $permission
            ]);
        });
    }
}
