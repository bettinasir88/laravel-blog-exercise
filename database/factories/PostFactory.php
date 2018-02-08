<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(8);

    return [
        'title' => $title,
        'slug'  => str_slug($title),
        'text'  => $faker->realText(250),
        'is_published' => $faker->boolean(80),
    ];
});
