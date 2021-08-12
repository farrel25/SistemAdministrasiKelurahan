<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

// factory(App\Article::class, 10)->create();
// factory ('App\Article', 10)->create();
$factory->define(Article::class, function (Faker $faker) {
    $title = $faker->sentence($nbWords = 3);
    $slug = Str::slug($title);

    return [
        // 'category_id'=>$faker->randomDigit,
        'category_id' => $faker->numberBetween($min = 1, $max = 5),
        'user_id' => 1,
        'title' => $title,
        'thumbnail' => $faker->imageUrl($width = 640, $height = 480),
        'slug' => $slug,
        'body' => $faker->paragraph($nbSentences = 15, $variableNbSentences = true),
        'enabled' => 1,
        'commentable' => 1,
        'document' => null,
        'link_document' => null,
        'read_count' => 0,
    ];
});
