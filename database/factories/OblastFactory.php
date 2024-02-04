<?php

use Faker\Generator as Faker;

$factory->define(App\Oblast::class, function (Faker $faker) {
    return [
        'basin_id' => $faker->randomDigit,
        'drainage_id' => $faker->randomDigit,
        'name_ru' => $faker->streetName,
        'name_tj' => $faker->streetName,
        'name_en' => $faker->streetName,
        'district' => $faker->word,
        'republic' => $faker->word,
        'source' => $faker->country,
        'area' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
    ];
});
