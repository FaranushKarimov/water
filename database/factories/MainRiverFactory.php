<?php

use Faker\Generator as Faker;

$factory->define(App\MainRiver::class, function (Faker $faker) {
    return [
        'basin_id' => $faker->randomDigit,
        'catchment_id' => $faker->randomDigit,
        'name_ru' => $faker->streetName,
        'name_tj' => $faker->streetName,
        'name_en' => $faker->streetName,
        'woc' => $faker->streetName,
        'region' => $faker->word,
        'republic' => $faker->country,
        'length' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'annual_drain' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'watershed_area' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
    ];
});
