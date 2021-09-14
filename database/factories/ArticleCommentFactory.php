<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ArticleComment;
use Faker\Generator as Faker;

// factory(App\ArticleComment::class, 25)->create();
$factory->define(ArticleComment::class, function (Faker $faker) {
    return [
        //
        'article_id' => $faker->numberBetween($min = 1, $max = 10),
        'user_id' => null,
        'parent_comment_id' => $faker->numberBetween($min = 1, $max = 5),
        'full_name' => $faker->name(),
        'email' => $faker->freeEmail,
        'comments' => $faker->sentence(),
        'enabled' => 1,
    ];
});
// factory ('App\ArticleComment', 25)->create();
