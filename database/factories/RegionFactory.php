<?php

use Faker\Generator as Faker;

$factory->define(App\Region::class, function (Faker $faker) {
    return [
        'basin_id' => $faker->randomDigit,
        'oblast_id' => $faker->randomDigit,
        'name_ru' => $faker->streetName,
        'name_tj' => $faker->streetName,
        'name_en' => $faker->streetName,
        'area' => $faker->word,
        'republic' => $faker->word,
        'district' => $faker->country,
    ];
});
