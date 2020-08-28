<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use App\Provider;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Provider::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'company_name' => $faker->company,
        'name' => $name,
        'slug' => Str::slug($name),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'mobile' => $faker->phoneNumber,
        'url' => $faker->url,
        'email' => $faker->email,
        'city_id' => function () {
          return City::all()->random();
        }
    ];
});
