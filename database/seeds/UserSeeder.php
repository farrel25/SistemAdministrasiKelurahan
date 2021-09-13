<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nik' => '3374101234567891',
            'full_name' => 'Codice Pugnator',
            'email' => 'admin@desawonosuko.com',
            'email_verified_at' => null,
            'password' => Hash::make('123456'),
            'phone' => '082112345678',
            'photo' => null,
            'is_active' => 1,
            'last_login' => null
        ])->assignRole('Administrator');
    }
}
