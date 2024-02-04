<?php

use Faker\Generator as Faker;

$factory->define(App\WaterLevel::class, function (Faker $faker) {
    return [
        'hydropost_id' => $faker->randomDigit,
        'height_h' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'flow_q' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'dynamic' => $faker->boolean($chanceOfGettingTrue = 50),
    ];
});
