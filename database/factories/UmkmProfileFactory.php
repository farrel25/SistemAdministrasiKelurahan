<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UmkmProfile;
use App\User;
use Faker\Generator as Faker;

$factory->define(UmkmProfile::class, function (Faker $faker) {
    $userData = User::find(1);

    return [
        'user_id' => $userData->id,
        'brand' => null,
        'full_name' => $userData->full_name,
        'phone' => $userData->phone,
        'address' => $faker->address,
        'website' => null,
        'instagram' => null,
        'facebook' => null,
        'is_active' => 1,
    ];
});
