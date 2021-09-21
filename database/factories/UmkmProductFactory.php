<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UmkmProduct;
use Faker\Generator as Faker;

$factory->define(UmkmProduct::class, function (Faker $faker) {
    $productName = $faker->sentence($nbWords = 2);

    return [
        'umkm_category_id' => $faker->numberBetween($min = 1, $max = 4),
        'umkm_profile_id' => 1,
        'product_name' => $productName,
        'photo' => $faker->imageUrl($width = 320, $height = 320),
        'description' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'price' => '10.000',
        'stock' => $faker->numberBetween($min = 0, $max = 5),
        'view_count' => 0,
    ];
});
