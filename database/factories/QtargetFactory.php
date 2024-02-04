<?php

use Faker\Generator as Faker;

$factory->define(App\Qtarget::class, function (Faker $faker) {
    return [
        'wua_id' => $faker->randomDigit,
        'region_id' => $faker->randomDigit,
        'qms_plan_per_day' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
    ];
});
