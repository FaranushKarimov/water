<?php

use Faker\Generator as Faker;

$factory->define(App\Qrequest::class, function (Faker $faker) {
    return [
        'region_id' => $faker->randomDigit,
        'wua_id' => $faker->randomDigit,
        'qms_request_per_day' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
    ];
});
