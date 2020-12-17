<?php

use Illuminate\Database\Seeder;

class RoleHasPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionId = [1, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 7, 8, 8, 8, 9, 9, 9];
        $roleId = [1, 2, 3, 1, 2, 1, 2, 1, 2, 1, 2, 1, 1, 1, 2, 3, 1, 2, 3];

        for ($i = 0; $i < count($permissionId); $i++) {
            \DB::table('role_has_permissions')->insert([
                'permission_id' => $permissionId[$i],
                'role_id' => $roleId[$i]
            ]);
        }
    }
}
