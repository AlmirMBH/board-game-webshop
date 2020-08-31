<?php

/** @var Factory $factory */

use App\Canton;
use App\City;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(City::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'name' => $faker->city,
        'canton_id' => function () {
          return Canton::all()->random();
        },
        'is_available' => $faker->numberBetween(0,1)
    ];
});
