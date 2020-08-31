<?php

/** @var Factory $factory */

use App\Canton;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Canton::class, function (Faker $faker) {
    return [
      'name' => $faker->country
    ];
});
