<?php

use App\VillagerMaritalStatus;
use Illuminate\Database\Seeder;

class VillagerMaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maritalStatuses = collect([
            'Belum Kawin',
            'Kawin',
            'Cerai Hidup',
            'Cerai Mati'
        ]);

        $maritalStatuses->each(function ($maritalStatus) {
            VillagerMaritalStatus::create([
                'marital_status' => $maritalStatus
            ]);
        });
    }
}
