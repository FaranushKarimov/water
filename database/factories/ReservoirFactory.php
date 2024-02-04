<?php

use Faker\Generator as Faker;

$factory->define(App\Reservoir::class, function (Faker $faker) {
    return [
        'basin_id' => $faker->randomDigit,
        'name_ru' => $faker->streetName,
        'name_tj' => $faker->streetName,
        'name_en' => $faker->streetName,
        'woc' => $faker->word,
        'district' => $faker->streetName,
        'region' => $faker->streetName,
        'republic' => $faker->country,
        'administration' => $faker->word,
        'type' => $faker->word,
        'purpose' => $faker->streetAddress,
        'dam_type' => $faker->word,
        'watercourse' => $faker->word,
        'dam_height' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'total_vol_ml_cub_m' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'net_vol_ml_cub_m' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'area' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
    ];
});
