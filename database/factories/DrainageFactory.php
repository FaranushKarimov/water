<?php

use Faker\Generator as Faker;

$factory->define(App\Drainage::class, function (Faker $faker) {
    return [
        'river_id' => $faker->randomDigit,
        'name_ru' => $faker->randomDigit,
        'name_tj' => $faker->streetName,
        'name_en' => $faker->streetName,
        'woc' => $faker->streetName,
        'type' => $faker->word,
        'location_of_drain' => $faker->streetAddress,
        'year_of_commissioning' => $faker->numberBetween($min = 2010, $max = 2020),
        'top_width' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'bottom_width' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'depth' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'length' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'water_protection_strips' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'technical_condition' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
    ];
});
