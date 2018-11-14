<?php

use Faker\Generator as Faker;

$factory->define(App\Period::class, function (Faker $faker) {
    return [
        'start' => $faker->date(),
        'end' => $faker->date(),
        'confirmed' => $faker->date(),
    ];
});
