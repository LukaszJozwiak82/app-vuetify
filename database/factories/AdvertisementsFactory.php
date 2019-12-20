<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Advertisement::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigitNotNull,
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 6, $max = NULL),
    ];
});
