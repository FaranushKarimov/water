<?php

use Faker\Generator as Faker;

$factory->define(App\Hydropost::class, function (Faker $faker) {
    return [
        'wua_id' => $faker->numberBetween(1,50),
        'canal_id' => $faker->randomDigit,
        'counter_hydropost_id' => '00000' . $faker->randomDigit,
        'name_ru' => $faker->streetName,
        'name_tj' => $faker->streetName,
        'name_en' => $faker->streetName,
        'year_of_commissioning' => $faker->numberBetween($min = 2010, $max = 2020),
        'woc' => $faker->word,
        'type' => $faker->numberBetween($min = 2, $max = 3),
        'district' => $faker->address,
        'region' => $faker->address,
        'republic' => $faker->streetAddress,
        'source' => $faker->streetAddress,
        'technical_condition' => $faker->streetAddress,
    ];
});
