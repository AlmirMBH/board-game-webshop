<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use App\Outlets;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Outlets::class, function (Faker $faker) {
    $companyName = $faker->company;
    return [
        'name' => $companyName,
        'slug' => Str::slug($companyName),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'city_id' => function () {
          return City::all()->random();
        },
        'is_availability' => $faker->boolean,
    ];
});
