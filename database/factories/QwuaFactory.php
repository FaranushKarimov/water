<?php

use Faker\Generator as Faker;

$factory->define(App\Qwua::class, function (Faker $faker) {
    return [
        'wua_id' => $faker->randomDigit,
        'region_id' => $faker->randomDigit,
        'qwua_avg' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'volume_w' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
