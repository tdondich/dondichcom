<?php

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'excerpt' => $faker->sentence,
        'content' => $faker->paragraphs(3, true),
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    
    ];
});
