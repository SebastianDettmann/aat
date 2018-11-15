<?php

use App\Period;
use App\Reason;
use Faker\Generator as Faker;

$factory->define(Period::class, function (Faker $faker) {
    return [
        'start' => $faker->date(),
        'end' => $faker->date(),
        'confirmed' => $faker->date(),
        'reason_id' => function() {
            return factory(Reason::class)->create()->id;
        }
    ];
});
