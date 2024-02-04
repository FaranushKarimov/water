<?php

use Faker\Generator as Faker;

$factory->define(App\WaterBasinZone::class, function (Faker $faker) {
    return [
        'name_ru' => $faker->randomDigit,
        'name_tj' => $faker->randomDigit,
        'name_en' => $faker->streetName,
        'woc' => $faker->word,
        'area' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
    ];
});
