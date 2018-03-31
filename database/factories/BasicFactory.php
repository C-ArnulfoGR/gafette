<?php

use Faker\Generator as Faker;

$factory->define(\App\Basic::class, function (Faker $faker) {
    return [
        'sitio' => str_random(10),
        'link_fb' => str_random(10),
        'link_tw' => str_random(10),
        'link_yt' => str_random(10),
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->sentence(3),
        'telephone' => str_random(8),
        'objective' => $faker->sentence(8),
        'about_us' => $faker->sentence(8),
        'biography' => $faker->sentence(8),
    ];
});
