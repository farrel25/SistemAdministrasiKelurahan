<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        // 'category_id'=>$faker->randomDigit,
        'category_id'=>$faker->numberBetween($min = 1, $max = 5) ,
        'user_id'=>$faker->randomDigit,
        'title'=>$faker->sentence(),
        'thumbnail'=>$faker->sentence(),
        'slug'=>\Str::slug($faker->sentence()),
        'body'=>$faker->paragraph(10),
        'enabled'=>1,
        'commentable'=>1,
        'document'=>$faker->sentence(),
        'link_document'=>$faker->sentence()
        // $faker->unique()->randomDigit
    ];
});
