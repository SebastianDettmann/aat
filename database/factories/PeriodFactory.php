<?php

use App\Period;
use App\Reason;
use App\User;
use Faker\Generator as Faker;

$factory->define(Period::class, function (Faker $faker) {
    return [
        'start' => $faker->date(),
        'end' => $faker->date(),
        'confirmed' => $faker->date(),
        'reason_id' => function() {
                return factory(Reason::class)->create()->id;
        },
        'user_id' => function() {
                return factory(User::class)->create()->id;
        }
    ];
});
