<?php

/** @var Factory $factory */

use App\Canton;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Canton::class, function (Faker $faker) {
    return [
      'name' => $faker->randomElement($array = array('ZH', 'SH', 'TG', 'SG', 'AR', 'AI', 'LI', 'ZG', 'SZ', 'GL', 'LU', 'NW', 'OW', 'UR', 'GR', 'BE', 'BS', 'BL', 'AG', 'SO'))
    ];
});
