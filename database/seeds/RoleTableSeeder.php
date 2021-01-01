<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleTableSeeder extends Seeder
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

        $roles = collect([
            'Administrator',
            'Kepala Desa',
            'Sekretaris',
            'KAUR Umum',
            'KAUR Keuangan',
            'KAUR Pembangunan',
            'KAUR Keamanan dan Ketertiban',
            'Penduduk'
        ]);

        $roles->each(function ($role) {
            Role::create([
                'name' => $role
            ]);
        });
    }
}
