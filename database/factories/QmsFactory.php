<?php

use Faker\Generator as Faker;

$factory->define(App\Qms::class, function (Faker $faker) {
    return [
        'irrigation_id' => $faker->randomDigit,
        'hydropost_id' => $faker->numberBetween(1,50),
        'qms_avg' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'volume_w' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
		'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
