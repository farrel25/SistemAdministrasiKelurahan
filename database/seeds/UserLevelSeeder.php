<?php

use App\UserLevel;
use Illuminate\Database\Seeder;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userLevels = collect(['Administrator', 'Redaktur', 'Villager']);

        $userLevels->each(function ($userLevel) {
            UserLevel::create([
                'level' => $userLevel
            ]);
        });
    }
}
