<?php

use Faker\Generator as Faker;

$factory->define(App\Lake::class, function (Faker $faker) {
    return [
        'basin_id' => $faker->randomDigit,
        'name_ru' => $faker->streetName,
        'name_tj' => $faker->streetName,
        'name_en' => $faker->streetName,
        'woc' => $faker->streetName,
        'jamoat' => $faker->word,
        'district' => $faker->word,
        'region' => $faker->word,
        'republic' => $faker->country,
        'area' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'volume' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'elevation' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
    ];
});
