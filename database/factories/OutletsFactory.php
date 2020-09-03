<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Outlets;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Outlets::class, function (Faker $faker) {
    $companyName = $faker->company;
    return [
        'name' => $companyName,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'city_id' => $faker->numberBetween(1,10),
        'is_availability' => $faker->boolean,
        'slug' => Str::slug($companyName),
    ];
});
