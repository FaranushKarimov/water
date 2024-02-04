<?php

use Faker\Generator as Faker;

$factory->define(App\CatchmentArea::class, function (Faker $faker) {
    return [
        // 'id' => $faker->randomDigit,
        'basin_id' => $faker->randomDigit,
        'name_ru' => $faker->randomDigit,
        'name_tj' => $faker->streetName,
        'name_en' => $faker->streetName,
        'woc' => $faker->streetName,
        'district' => $faker->word,
        'region' => $faker->word,
        'republic' => $faker->country,
        'area' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
    ];
});
