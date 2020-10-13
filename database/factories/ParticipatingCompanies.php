<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\ParticipatingCompanies;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(ParticipatingCompanies::class, function (Faker $faker) {
    $companyName = $faker->company;
    return [
        'name' => $companyName,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'city_id' => $faker->numberBetween(1,10),
        'slug' => Str::slug($companyName),
    ];
});
