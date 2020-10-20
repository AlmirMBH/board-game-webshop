<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'short_description' => $faker->paragraph(1),
        'long_description' => $faker->paragraph(1),
        'price' => $faker->randomFloat(2, 1, 9),
        'quantity' => $faker->randomDigit,
        'featured_image' => $faker->imageUrl(),
    ];
});
