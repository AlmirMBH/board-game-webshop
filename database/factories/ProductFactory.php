<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph(1),
        'regular_price' => $faker->randomFloat(2, 1, 9),
        'discount_price' => 0,
        'quantity' => $faker->randomDigit,
    ];
});
