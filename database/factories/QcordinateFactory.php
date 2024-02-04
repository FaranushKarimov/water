<?php

use Faker\Generator as Faker;

$factory->define(App\Qcordinate::class, function (Faker $faker) {
    return [
    	'hydropost_id' => $faker->randomDigit,
        'height' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
        'flow' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = NULL),
    ];
});
