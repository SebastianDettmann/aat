<?php

use App\Period;
use App\Reason;
use App\User;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Period::class, function (Faker $faker) {
    return [
        'start' => Carbon::today()->toDateString(),
        'end' => Carbon::today()->addDays(rand(1, 10))->toDateString(),
        'comment' => $faker->text(),
        'confirmed' => Carbon::today()->addDays(rand(1, 10))->toDateString(),
        'reason_id' => function() {
                return factory(Reason::class)->create()->id;
        },
        'user_id' => function() {
                return factory(User::class)->create()->id;
        }
    ];
});
