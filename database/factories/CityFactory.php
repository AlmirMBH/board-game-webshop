<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
        'is_available' => $faker->boolean,
        'canton_id' => $faker->numberBetween(1,10),
    ];
});
