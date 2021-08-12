<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Villager;
use Faker\Generator as Faker;

// factory(App\Villager::class, 20)->create();
// factory(App\Villager::class, 20)->create('id_ID'); [ERROR]
$factory->define(Villager::class, function (Faker $faker) {
    return [
        'nik' => $faker->unique()->numerify('################'),
        'user_id' => null,
        'full_name' => $faker->firstName(),
        'sex_id' => $faker->numberBetween($min = 1, $max = 2),
        'birth_place' => $faker->city,
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'religion_id' => $faker->numberBetween($min = 1, $max = 7),
        'education_id' => $faker->numberBetween($min = 1, $max = 10),
        'profession_id' => $faker->numberBetween($min = 1, $max = 89),
        'marital_status_id' => $faker->numberBetween($min = 1, $max = 4),
        'nationality_id' => $faker->numberBetween($min = 1, $max = 3),
        'father_nik' => $faker->numerify('################'),
        'mother_nik' => $faker->numerify('################'),
        'father_name' => $faker->name($gender = 'male'),
        'mother_name' => $faker->name($gender = 'female'),
        'photo' => null,
        'blood_type_id' => $faker->numberBetween($min = 1, $max = 13),
        'stay_status_id' => $faker->numberBetween($min = 1, $max = 3),
        'address' => $faker->address,
        'life_status_id' => 1,
        'disability_id' => $faker->numberBetween($min = 1, $max = 7),
        'chronic_disease_id' => $faker->numberBetween($min = 1, $max = 14),
        'phone_number' => $faker->e164PhoneNumber,
        'age_range_id' => null,
        'created_by' => 1,
        'updated_by' => 1
    ];
});
