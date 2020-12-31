<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ArticleComment;
use Faker\Generator as Faker;

$factory->define(ArticleComment::class, function (Faker $faker) {
    return [
        //
        'article_id' => $faker->numberBetween($min = 24, $max = 26),
        'owner' => $faker->randomDigit,
        'email' => $faker->sentence(),
        'comments' => $faker->sentence(),
        'enabled' => 1,
    ];
});
// factory ('App\ArticleComment', 10)->create();
